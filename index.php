<?php
        /*Carga sql*/
            include('./services/conexion.php');
            include('./account/login.php')
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo.ico">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
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
            <img src="./assets/iconos/User_white.png" class="perfil_white" onclick="redirect('Usuario')"></img>
            <img src="./assets/iconos/basket_white.png" class="carro_white"></img>
            <!--<img src="./assets/User_white.png" class="perfil_gold" style="right: 5rem; left: unset;" onclick="redirect('Usuario')"></img>
            <img src="./assets/User_white.png" class="perfil_white" onclick="redirect('Usuario')"></img>
            <img src="./assets/basket_white.png" class="carro_gold" style="right: 2rem; left: unset;"></img>
            <img src="./assets/basket_white.png" class="carro_white"></img>-->
        </nav>
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
                
                <div class="cont_region_unite">
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
            <h1>Elecciones Recomendadas</h1>
            <hr>
        </section>
        <section class="products">
            <section class="vino">
                <div> 

                </div>
                <h1 class="P-Name">Vino 1</h1> <!-- Cargar Nombre de la SQL -->
                <hr>
                <p>Un vino con un potente aroma<br>traido del Valle de Uco</p> <!-- Descripcion SQL -->
                <p class="price">$ 25.99</p> <!-- Cargar Precio de la SQL -->
            </section>
            <section class="vino">
                <div> 

                </div>
                <h1 class="P-Name">Vino 2</h1> <!-- Cargar Nombre de la SQL -->
                <hr>
                <p>Un vino con un potente aroma<br>traido del Valle de Uco</p> <!-- Descripcion SQL -->
                <p class="price">$ 35.99</p> <!-- Cargar Precio de la SQL -->
            </section>
            <section class="vino">
                <div> 

                </div>
                <h1 class="P-Name">Vino 3</h1> <!-- Cargar Nombre de la SQL -->
                <hr>
                <p>Un vino con un potente aroma<br>traido del Valle de Uco</p> <!-- Descripcion SQL -->
                <p class="price">$ 12.99</p> <!-- Cargar Precio de la SQL -->
            </section>
            <section class="vino">
                <div> 

                </div>
                <h1 class="P-Name">Vino 1</h1> <!-- Cargar Nombre de la SQL -->
                <hr>
                <p>Un vino con un potente aroma<br>traido del Valle de Uco</p> <!-- Descripcion SQL -->
                <p class="price">$ 25.99</p> <!-- Cargar Precio de la SQL -->
            </section>
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
<script type = "text/javascript" src="js/slider.js"></script>
</html>