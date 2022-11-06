<?php
    /*Carga sql*/
    include('./header/nav-2.php');
    include('./services/conexion.php');
    include('./account/login.php');
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/11fdbcd7e6.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo.ico">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/index.css">
</head>
        <section id="titulo">
            <h1>Valle de Uco</h1>
        </section>

        <div id="imagen_der"></div>
        <div id="imagen_izq"></div>
        <div id="div_medio"> 
            <p>En el corazón de la Cordillera de Los Andes, 
            <br>Mendoza es la principal provincia vitivinícola de Argentina.
            <br>
            En esta tierra del Malbec, los aromas y sabores
            <br>
            auténticos de la gastronomía local se conjugan en armonía con destacados vinos.
            </p> 
        </div>
        <div id="contenedor_market" style="margin-top: 0;">
            <section id="home_rec">

            </section>
        </div>

        <div class="contacto">
            <?php
            /*Carga el html de contacto*/
                include('./footer/contacto.php');
            ?>
        </div>




<script>
    function load_rec()
        {
            const market = document.getElementById("home_rec");
            
            const formbusqueda = new FormData();

            formbusqueda.set("filtro_nombre", "uco");
            fetch('load_market.php',
            {
                method: 'POST',
                body: formbusqueda
            })
            .then(function(response) 
            {
                if(response.ok) 
                {
                    return response.text();
                } else 
                {
                    throw "Error";
                }
            })
            .then(function(texto) 
            {
                market.innerHTML = " ";
                market.innerHTML = texto;
            })
            .catch(function(err) 
            {
                console.log(err);
            });
        }
document.addEventListener("DOMContentLoaded", function(event) {
    load_rec();
});
</script>
<link rel="stylesheet" href="store/style_market.css">
<script src="store/script_carrito_charger.js"></script>
<script type = "text/javascript" src="js/General-Functions.js"></script>
</script>
<link rel="stylesheet" href="store/style_market.css">
<script src="store/script_carrito_charger.js"></script>
</html>

<style>
#imagen_der{
    position: relative;
    width: 25vw;
    height: 30vw;
    float: right;
    background-image: url(../assets/fondos/uco2.jpg);
    background-size: 200%;
    background-repeat: no-repeat;
}

#imagen_izq

{
    position: relative;
    top: 5vw;
    width: 15vw;
    height: 20vw;
    background-image: url(../assets/fondos/uco1.jpg);
    background-size: cover;
    background-repeat: no-repeat;

}
#titulo{
    position: relative;
    left: 45%;
    width: 300px;
    height: 70px;
    font-size: 1.6rem;
    margin: 0;
    top: 25px;
    font-family: 'Prestage';
}
#div_medio{
    position: relative;
    width: 490px;
    left: 37%;
    height: 400px;
    font-size: 1.3rem;
    font-family: 'Brandon-Grotesque';
    top: -250px;
    border: 1px solid darkslategray;
}
#div_medio p{
    margin: 0;
    margin-top: 25px;
    margin-left: 30px;
}
</style>