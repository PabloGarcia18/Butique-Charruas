<?php
        /*Carga sql*/
            include('services/conexion.php');
            include('header/nav-2.php');
            include('account/login.php');
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="store/script_shop_loaded.js"></script>
    <script src="store/script_carrito_charger.js"></script>
    <link rel="stylesheet" href="store/style_market.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php   
        include('services/buscar.php');?>
    <div id="contenedor_market">
        <section id="celda_market">


        </section>
    </div>
    
    
    
    
    <div class="contacto">
        <!-- Pie de Pagina -->
        <?php
        /*Carga el html de contacto*/
            include('footer/contacto.php');
        ?>
    </div>
</body>