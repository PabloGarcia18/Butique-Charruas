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
            <i class="fa-sharp fa-solid fa-bars" id="movile" onclick="desplegar()"></i>
            <p class="nav-vinos" onclick="redirect('tienda')">Vinos</p>
            <p class="nav-expe" onclick="redirect('experiencias')">Experiencias</p>    
            <img src="./assets/iconos/logo.png" class="nav-logo" onclick="redirect('Home')">
            <p class="nav-contacto" onclick="redirect('contacto')">Contacto</p>    
            <p class="nav-nosotros" onclick="redirect('nosotros')">Nosotros</p>
            <i class="fa fa-search" id="busqueda" onclick="redirect('search')"></i>
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
                <p class="count"></p>   
                
                <div id="tring-cart"></div>
            
                <div id="cont-cart"></div>
            </div>
            <div id="bkgmov">


            </div>
        </nav>
        <?php
        include('services/buscar.php');
        ?>
        
</html>
<script>
    var mov = document.getElementById("movile");

    var clicked = false
    function desplegar(){
        var bkg = document.getElementById("bkgmov");
        let v = document.querySelector(".nav-vinos");
        let n = document.querySelector(".nav-nosotros");
        let c = document.querySelector(".nav-contacto");
        let e = document.querySelector(".nav-expe");





        if(clicked == false){
            bkg.style.opacity = "1";
            clicked = true;
            
            v.style.zIndex = "2";
            n.style.zIndex = "2";
            c.style.zIndex = "2";
            e.style.zIndex = "2";

            v.style.opacity = "1";
            n.style.opacity = "1";
            c.style.opacity = "1";
            e.style.opacity = "1";




            return true;
        }else{
            bkg.style.opacity = "0";
            clicked = false;
            
            v.style.opacity = "0";
            n.style.opacity = "0";
            c.style.opacity = "0";
            e.style.opacity = "0";
            
            v.style.zIndex = "-3";
            n.style.zIndex = "-3";
            c.style.zIndex = "-3";
            e.style.zIndex = "-3";

            



            return false;
        }
        


        
        
    }


</script>