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
        <form action="" id="usuariosadd" class="agregaru">
            <h1>Agregar Usuario.</h1>
            <input type="text" placeholder="Ingrese un Correo">
            <input type="text" placeholder="Ingrese una Contraseña">
            <input type="text" placeholder="Direccion">
            <input type="text" placeholder="Telefono">
            <input type="text" placeholder="CI/RUT">

            <button type="submit">Agregar Usuario</button>  
        </form>
        <div class="eliminar">
            <form id="buscar-usr" method="POST" name="form1" id="buscar_fetch">  
                <input type="text" class="Search" name="busqueda" placeholder="Buscar Vino" onkeypress="buscar_usr()"> 
                <i class="fa fa-search" id="busqueda" onclick="buscar_usr()"></i>
                
            </form>
            <div id="eliminar">
                    

            </div>
        </div>
        
    </section>
</body>
</html>
<style>
.userinfo:hover{
    cursor: pointer;
    background-color: wheat;
}
.eliminar{
    display: none;
    display: inline-grid;
    position: relative;
    left: 50px;
    top: 50px;
}
#eliminar{
    width: 100%;
    max-height: 70vh;
    overflow-y: auto;
}
.usuarios{
    position: relative;
}
.agregaru{
    display: none;
    position: relative;
    grid-gap: 5px;
    justify-items: center;
    top: 50px;
    left: 50px;
}
.agregaru input{
    height: 30px;
    width: 200px;
}
.interaccion{
    position: relative;
    top: 35px;
    left: 135px;
    width: 35vw;
    height: 80vh;
    max-height: 80vh;
    border: 1px solid;
    background-color: whitesmoke;
}
</style>