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
        /*Carga busqueda*/
        include('services/buscar.php');
    ?>
    <div class="contacto">
        <!-- Pie de Pagina -->
        <?php
        /*Carga el html de contacto*/
            include('footer/contacto.php');
        ?>
    </div>
</body>
<style>
.celda_market2 {
    display: grid;
    grid-template-columns: 15vw 15vw 15vw 15vw 15vw;
    grid-gap: 15px;
    justify-content: center;
    margin-top: 12px;
}
.celda_market2 div{
    position: relative;
    width: 100%;
    height: 50%;
    top: 10px;
    border-radius: 15px 15px 0 0;
    background-size: 40% 100%;
    background-position: center;
    background-position-y: bottom;
    background-repeat: no-repeat;
}
.celda_market2 p{
    position: relative;
    text-align: center;
    margin-top: 20px;
    font-family: 'Brandon-Grotesque-Italic';
}
.celda_market2 section 
{
    height: 450px;
    border-radius: 15px;
    border: solid 1px gray;
    text-align: center;
    font-family: monospace;
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    background-color: whitesmoke;
    transition: all cubic-bezier(0.39, 0.58, 0.57, 1) .5s;
}
.celda_market2 section:hover{
    transform: scale(0.99);
}
.celda_market2 section p 
{
    font-size: 0.8vw;
}
.celda_market2 h1{
    position: relative;
    font-family: 'Brandon-Grotesque-Italic';
    font-size: 1.3rem;
    font-weight: 600;
    text-align: center;
}
</style>