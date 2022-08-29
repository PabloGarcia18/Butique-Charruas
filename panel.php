<?php 
session_start();
 
// Si ya esta Logeado y es admin
if(isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true && $_SESSION["tipouser"] === "Administrador"){
    echo "Bienvenido Administrador";
}else{
    //header("Location: https://localhost/Butique-Charruas/");
    echo "No eres administrador";
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
</head>
<body>
    <section class="acciones">
        <a href="#">Control de Usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29;"></i></a>
            <a href="#">/Añadir usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
            <a href="#">/Eliminar usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
            <a href="#">/Editar usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
        <a href="#">/Control de Stock<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29;"></i></a> 
        <a href="#">/Añadir usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
            <a href="#">/Eliminar usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
            <a href="#">/Editar usuarios<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29; display: none;"></i></a>
        <a href="#">/Facturas<i class="fab fa-facebook-f" style="line-height: unset; font-size: 29;"></i></a>
    </section>
</body>
</html>