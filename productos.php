<?php
        /*Carga sql*/
            include('./services/conexion.php');
            include('./header/nav.php');
            include('./account/login.php');
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script_shop_loaded.js"></script>
    <script src="script_carrito_charger.js"></script>
    <link rel="stylesheet" href="style_market.css">
</head>
<body>
    <div id="contenedor_market">
        <section class="celda_market"></section>
        <section class="celda_carrito">
            <span id="carrito_content">
                <h1>su carrito de compra</h1>
                <br><br>
            </span>
            <button onclick="generar_compra();"> realizar compra </button>
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