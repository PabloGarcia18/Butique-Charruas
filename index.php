<?php
        /*Carga sql*/
            include('./services/conexion.php');
            include('./account/login.php')
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butique</title>
    <!-- Boostrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="icon" type="image/x-icon" href="./assets/logo.ico">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div>
    <!-- Menu -->
        <nav>
            <p class="nav-contacto">Contacto</p>    
            <p class="nav-nosotros">Nosotros</p>
            <img src="./assets/logo.png" class="nav-logo">
            <p class="nav-vinos">Vinos</p>
            <p class="nav-expe">Experiencias</p>
            <img src="./assets/User_gold.png" class="perfil_gold" onclick="redirect('Usuario')"></img>
            <img src="./assets/User_white.png" class="perfil_white" onclick="redirect('Usuario')"></img>
            <img src="./assets/basket_gold.png" class="carro_gold"></img>
            <img src="./assets/basket_white.png" class="carro_white"></img>
        </nav>
    </div>
    <div>
        <!-- Video -->
        <section class="intro-container">
            <video muted autoplay loop>
                <source src="./assets/Intro.mp4" 
                type="video/mp4">
            </video>
        </section>
    </div>
    <div>
        <!-- Contenido -->
        <section class="author-container">
            <?php
                include('autores.php'); 
            ?>
        </section>
    </div>
    <div>
        <section class="products">
            <div class="box-container">
            </div>
        </section>
    </div>
    <div class="contacto">
        <!-- Pie de Pagina -->
        <?php
        /*Carga el html de contacto*/
            include('./footer/contacto.php');
        ?>
    </div>
</body>
<script type = "text/javascript" src="js/General-Functions.js"></script>
</html>