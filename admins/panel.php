<?php 
session_start();
 
// Si ya esta Logeado y es admin
if(isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true && $_SESSION["tipouser"] === "Administrador"){
    echo "Bienvenido";
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

    <section class="interaccion">
        <form action="" class="addusers">
            <input type="text" placeholder="Ingrese un Correo">
            <input type="text" placeholder="Ingrese una Contraseña">
            <input type="text" placeholder="Direccion">
            <input type="text" placeholder="Telefono">
            <input type="text" placeholder="Ciudad">

            <button type="submit">Agregar Usuario</button>  
        </form>
        <form action="" class="deluser">
            

        </form>
    </section>
</body>
</html>
<style>
.interaccion{
    position: relative;
    top: 35px;
    left: 135px;
    width: 90vw;
    height: 80vh;
    border: 1px solid;
}
</style>