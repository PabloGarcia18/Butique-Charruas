<?php
    include("../services/conexion.php");
    
    if(isset($_POST["filtro_nombre"])){
        $busqueda = $_POST["filtro_nombre"];

        if(empty($busqueda)){
            $data = $conn->query("SELECT * FROM productos")->fetchAll();
        }else{
            $data = $conn ->query("SELECT * FROM productos WHERE nombre LIKE '%$busqueda%' OR idproducto LIKE '%$busqueda%'")->fetchAll();
        }

    }else{
        return true;
    }
    foreach ($data as $row)
    {
        echo "
        <div class='info' onclick="."seleccionar3(".$row['idproducto'].")".">
            <p class='productos'> Nombre:" . $row['Nombre'] . "<br>Descripcion:" . $row['Descripcion'] ."<br>Stock: " . $row['Stock'] ."<br>Precio:". $row['precio'] ."<br>ID:". $row['idproducto']."<br>Etiquetas:". $row['etiquetas']. "</p>
            <hr>
        </div>
        ";
    }   
?>