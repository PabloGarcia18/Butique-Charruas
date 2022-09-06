<!DOCTYPE html>
<html lang="es">
<head>
    <script type = "text/javascript" src="js/General-Functions.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/animations.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div>
    <!-- Menu -->
        <span id="insertHere"></span>
        <nav>
            <p class="nav-contacto" style="display: none">Contacto</p>    
            <p class="nav-nosotros" style="display: none">Nosotros</p>
            <img src="./assets/iconos/logo.png" class="nav-logo" style="display: none">
            <p class="nav-vinos" style="display: none">Vinos</p>
            <p class="nav-expe" style="display: none">Experiencias</p>
            <img src="./assets/iconos/flecha.png" class="arrow" onclick="redirect('Scroll')">
            <img src="./assets/iconos/User_white.png" class="perfil_white" 
            
            <?php 
            if($_SESSION["logeado"])
            {
                echo "onclick=\"alert('Usted ya esta logeado');\"";
            }else{
                echo "onclick=\"redirect('Usuario');\"";
            }
            
            ?>></img>
            <img src="./assets/iconos/basket_white.png" class="carro_white"></img>
            <!--<img src="./assets/User_white.png" class="perfil_gold" style="right: 5rem; left: unset;" onclick="redirect('Usuario')"></img>
            <img src="./assets/User_white.png" class="perfil_white" onclick="redirect('Usuario')"></img>
            <img src="./assets/basket_white.png" class="carro_gold" style="right: 2rem; left: unset;"></img>
            <img src="./assets/basket_white.png" class="carro_white"></img>-->
        </nav>
</html>