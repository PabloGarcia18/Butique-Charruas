<?php
    session_start();
    include("../services/conexion.php");
    
    if(isset($_POST["filtrar_prod"])){
        $busqueda = $_POST["filtrar_prod"];

        if(empty($busqueda)){
            return false;
        }else{
            $data = $conn ->query("SELECT * FROM productos WHERE idproducto = $busqueda")->fetchAll();
        }

    }else{
        return true;
    }
    foreach ($data as $row)
    {
        echo "
        <p class='usuarios'> 
        Nombre: " . $row['Nombre'] . 
        "<br>Descripcion: " . $row['Descripcion'] .
        "<br>Stock: " . $row['Stock'] .
        "<br>Etiquetas: ". $row['etiquetas'].
        "<br>Precio: $". $row['precio']. 
        "</p>";
    echo "
        <form method='POST' id='prodeliminar'> 
            <input type='text' disabled placeholder=". "ID:" . $row['idproducto']."></input>
            <button onclick="."eliminarproducto(".$row['idproducto'].",". $row['idproducto'].")".">Eliminar Producto</button> 
        </form>
        <form method='POST' id='editarproductofinal'> 
            <input name='id' required style='display: none;' type='text' value='". $row['idproducto']."'>
            <input type='text' required placeholder='Nombre: ". $row['Nombre']."' value='". $row['Nombre']."' name='name'>
            <input type='text' required placeholder='Descripcion: ". $row['Descripcion']."' value='". $row['Descripcion']."' name='desc'>
            <input type='number' placeholder='Stock: ". $row['Stock']."' value='". $row['Stock']."' name='stock'>
            <input type='number' placeholder='Precio: ". $row['precio']."' value='". $row['precio']."' name='precio'>
            <input type='text' placeholder='Etiquetas: ". $row['etiquetas']."' value='". $row['etiquetas']."' name='etiquetas'>

            <button onclick='confirmar_edit()'>Confirmar</button> 
        </form>
        ";
        
    }
           
?>