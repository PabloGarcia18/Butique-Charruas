<?php 
    session_start();    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script type = "text/javascript" src="js/General-Functions.js"></script>
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/nav-2.css">
    <link rel="stylesheet" href="./css/home.css">
    <script type = "text/javascript" src="js/General-Functions.js"></script>
    <script src="https://kit.fontawesome.com/11fdbcd7e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <!-- Menu -->
        <nav>
            <p class="nav-vinos" onclick="redirect('tienda')">Vinos</p>
            <p class="nav-expe" onclick="redirect('experiencias')">Experiencias</p>    
            <img src="./assets/iconos/logo.png" class="nav-logo" onclick="redirect('Home')">
            <p class="nav-contacto" onclick="redirect('contacto')">Contacto</p>    
            <p class="nav-nosotros" onclick="redirect('nosotros')">Nosotros</p>
            <i class="fa fa-search" id="busqueda"></i>
            <i class="far fa-user" id="perfil"
            <?php 
            if(!empty($_SESSION['logeado'])){
                echo "onclick=\"alert('Usted ya esta logeado');\"";
            }
            else{
                echo "onclick=\"redirect('Usuario');\"";
            }
            
            ?>></i>
            <div class="cart-content">
                <i class="fa-solid fa-cart-shopping" id="carro" onclick="redirect('Carro')"></i>   
                <div id="tring-cart"></div>
            
                <div id="cont-cart"></div>
            </div>
            
        </nav>
</html>