<?php 
session_start();
include("./pagar.php");
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
            <i class="far fa-user" id="perfil"
            <?php 
            if(!empty($_SESSION['logeado'])){
                echo "onclick=\"redirect('Usuario2');\"";
            }
            else{
                echo "onclick=\"redirect('Usuario2');\"";
            }
            
            ?>></i>
            <div class="cart-content">
                <i class="fa-solid fa-cart-shopping" id="carro" onclick="redirect('Carro')"></i>
                <p class="count"></p>   
                
                <div id="tring-cart"></div>
            
                <div id="cont-cart"></div>
            </div>
            <div id="bkgmov_close">
                <i onclick="cerrar();" class="fa-solid fa-xmark"></i>
            </div>
            <div id="bkgmov">


            </div>
            <div id="userac">
                <ul>
                    <a <?php 
                        if(!empty($_SESSION['logeado'])){
                            echo "href='../logout.php'";
                        }else{
                            echo "onclick=\"redirect('Usuario');\"";
                        }
                        ?>>
                        <?php 
                        if(!empty($_SESSION['logeado'])){
                            echo "Cerrar Session";
                        }
                        else{
                            echo "Logearse";
                        }
                        
                        ?>
                    </a>
                    <li>Idioma</li>
                </ul>
            </div>
        </nav>
        
</html>
<script>
    var mov = document.getElementById("movile");

    function desplegar(){
        var bkg = document.getElementById("bkgmov");
        var bkg2 = document.getElementById("bkgmov_close");
        let v = document.querySelector(".nav-vinos");
        let n = document.querySelector(".nav-nosotros");
        let c = document.querySelector(".nav-contacto");
        let e = document.querySelector(".nav-expe");
        bkg.style.opacity = "1";
        bkg.style.left = "0"
        bkg2.style.opacity = "1";
        bkg2.style.left = "11rem"
        
        v.style.zIndex = "2";
        n.style.zIndex = "2";
        c.style.zIndex = "2";
        e.style.zIndex = "2";
        v.style.opacity = "1";
        n.style.opacity = "1";
        c.style.opacity = "1";
        e.style.opacity = "1";
        
        v.style.left = "15px";
        n.style.left = "15px";
        c.style.left = "15px";
        e.style.left = "15px";
        return true;
    }
function cerrar(){
    var bkg2 = document.getElementById("bkgmov_close");
    var bkg = document.getElementById("bkgmov");
    let v = document.querySelector(".nav-vinos");
    let n = document.querySelector(".nav-nosotros");
    let c = document.querySelector(".nav-contacto");
    let e = document.querySelector(".nav-expe");

    bkg.style.opacity = "0";
    bkg2.style.opacity = "0";
    bkg2.style.left = "-900vw";
    bkg.style.left = "-900vw";
    
    v.style.opacity = "0";
    n.style.opacity = "0";
    c.style.opacity = "0";
    e.style.opacity = "0";
    
    v.style.zIndex = "-3";
    n.style.zIndex = "-3";
    c.style.zIndex = "-3";
    e.style.zIndex = "-3";

    v.style.left = "-800px";
    n.style.left = "-800px";
    c.style.left = "-800px";
    e.style.left = "-800px";

    return false;
}
</script>