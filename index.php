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
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div>
    <!-- Menu -->
    </div>
    <div>
        <!-- Video -->
        <section class="intro-container">
            <video muted autoplay loop style="filter: brightness(0.7);" id="intro1">
                <source src="./assets/videos/Intro2.mp4" 
                type="video/mp4">
            </video>
            <video muted pause loop style="display: none;" class="hidden" id="intro2">
                <source src="./assets/videos/Intro.mp4" 
                type="video/mp4">
            </video>
            <span class="intro-text">
                <p>Bienvenido a Boutique de Vinos Charruas</p>
                <h1>DONDE NUESTRA ESPECIALIDAD SON LOS VINOS</h1>
            </span>
            <!-- Slider -->
            <section class="slider-check">
                <!-- Boton 1 Intro Inicial -->
                <button 
                    id="v1" 
                    onclick="slider(1)" 
                    style="
                    border: solid 2.5px whitesmoke;
                    background-color: whitesmoke;"
                >
                </button>
                <!-- Boton 2 Intro Secundaria -->
                <button id="v2"
                    onclick="slider(2)" 
                    style="
                    border: solid 2.5px whitesmoke;
                    background-color: #867d8f;"
                >
                </button>
            </section>
        </section>
    </div>
    <div>
        <!-- Regiones -->
        <section id="cont_regiones">
            <div class="col_regiones">
                <div>
                    <span>
                        <h1>Vinos en el Mundo</h1>
                        <p>Te contamos un poco la historia del vino alrededor del mundo,<br>sus características, variedades y curiosidades en alguna de<br>las zonas que producen y contamos con stock de sus vinos.</p>
                    </span>
                </div>
                
                <div class="cont_region_unite" onclick="redirect('uco')">
                    <span>
                        <h1>Valle de Uco</h1>
                        <hr>
                        <p>Algunos de nuestros vinos.</p><br>
                        <p>En el corazón de la Cordillera de Los Andes, <br>Mendoza es la principal provincia vitivinícola de Argentina.<br> En esta tierra del Malbec, los aromas y sabores<br> auténticos de la gastronomía local se conjugan en armonía con destacados vinos.</p>
                    </span>
                </div>
            </div>
            <div class="col_regiones">
                <div class="cont_region_unite">
                    <span>
                        <h1>Península Ibérica</h1>
                        <hr>
                        <p>Algunos de nuestros vinos.</p><br>
                        <p>En el corazón de la Cordillera de Los Andes, <br>Mendoza es la principal provincia vitivinícola de Argentina.<br> En esta tierra del Malbec, los aromas y sabores<br> auténticos de la gastronomía local se conjugan en armonía con destacados vinos.</p>
                    </span>
                </div>

                <div class="cont_region_unite">
                    <span>
                        <h1>Valle Central</h1>
                        <hr>
                        <p>Algunos de nuestros vinos.</p><br>
                        <p>La región del Valle Central de Chile es una de las zonas <br>vitivinícolas más importantes de América del Sur <br>en términos de volumen. También es una de las regiones <br>vinícolas más grandes, que se extiende desde<br> el Valle del Maipo (al sur de Santiago) <br>hasta el extremo sur del Valle del Maule.</p>
                    </span>
                </div>
            </div>
        </section>

    </div>




        <!-- Productos -->
    <div>
        <section class="product-title">
            <p>Elecciones Recomendadas</p>
            <hr>
        </section>
        <div id="contenedor_market" style="margin-top: 0;">
            <section id="home_rec">

            </section>
        </div>
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
<script type = "text/javascript" src="js/slider.js"></script>
<script>
    function load_rec()
        {
            const market = document.getElementById("home_rec");
            
            const formbusqueda = new FormData();

            formbusqueda.set("filtro_nombre", "recomendado");
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
</html>