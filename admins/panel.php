<?php 
session_start();
 
// Si ya esta Logeado y es admin
if(isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true && $_SESSION["tipouser"] === "Administrador"){
    echo "Bienvenido Administrador";
}else{
    //header("Location: https://localhost/Butique-Charruas/");
    //echo "No eres administrador";
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel-css/index.css">
    <title>Panel de Administrador</title>
</head>
<body>
    <?php 
    include('acciones.php');
    include('../services/conexion.php');
    ?>
</body>
</html>