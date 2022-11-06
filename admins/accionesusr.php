<?php
    session_start();
    include("../services/conexion.php");
    
    if(isset($_POST["filtrar_user"])){
        $busqueda = $_POST["filtrar_user"];

        if(empty($busqueda)){
            return false;
        }else{
            $data = $conn ->query("SELECT * FROM usuarios WHERE idusuario = $busqueda")->fetchAll();
        }

    }else{
        return true;
    }
    foreach ($data as $row)
    {
        echo "
        <p class='usuarios'> 
        Nombre: " . $row['nombre'] . 
        "<br>Apellido: " . $row['apellido'] .
        "<br>Mail: " . $row['mail'] .
        "<br>Tipo de usuario: ". $row['tipousuario']. 
        "</p>";
        $tipo = $row["tipousuario"];
        $b = $_SESSION['tipouser'];
        if($tipo === $b || $tipo === "Superadministrador"){
            echo "<p>No podes eliminar a un $tipo</p>";
        }else{
            echo "
        <form method='POST' id='usuarioseliminar'> 
            <input type='text' disabled placeholder=". "ID:" . $row['idusuario']."></input>
            <button onclick="."eliminarusr(".$row['idusuario'].",". $row['tipousuario'].")".">Eliminar Usuario</button> 
        </form>
        ";
        }
        
    }   
?>