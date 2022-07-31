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
            <video muted autoplay loop style="filter: brightness(0.7);">
                <source src="./assets/Intro2.mp4" 
                type="video/mp4">
            </video>
            <span class="intro-text">
                <p>Bienvenido a Butique de Vinos Charruas</p>
                <h1>DONDE NUESTRA ESPECIALIDAD SON LOS VINOS</h1>
            </span>
        </section>
    </div>
    <div>


        <!-- Contenido 
        <div class="fila1">
            <section class="Peninsula">
                <span>
                    En el corazón de la Cordillera de Los Andes, Mendoza es la principal provincia vitivinícola de Argentina. En esta tierra del Malbec, los aromas y sabores auténticos de la gastronomía local se conjugan en armonía con destacados vinos.
                </span>
            </section>
        </div>-->

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