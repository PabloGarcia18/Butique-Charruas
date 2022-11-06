<?php
    include("../services/conexion.php");
    
    if(isset($_POST["filtro_nombre"])){
        $busqueda = $_POST["filtro_nombre"];

        if(empty($busqueda)){
            $data = $conn->query("SELECT * FROM usuarios")->fetchAll();
        }else{
            $data = $conn ->query("SELECT * FROM usuarios WHERE nombre LIKE '%$busqueda%' OR mail LIKE '%$busqueda%'")->fetchAll();
        }

    }else{
        return true;
    }
    foreach ($data as $row)
    {
        echo "
        <div class='userinfo' onclick="."seleccionar2(".$row['idusuario'].")".">
            <p class='usuarios'> Nombre:" . $row['nombre'] . "<br>Apellido:" . $row['apellido'] ."<br>Mail" . $row['mail'] ."<br>Tipo de usuario:". $row['tipousuario']. "</p>
            <hr>
        </div>
        ";
    }   
?>