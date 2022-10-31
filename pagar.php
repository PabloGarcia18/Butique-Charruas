<?php 
    session_start();
    if(!empty($_SESSION['logeado'])){
        echo "Usted esta logeado";
    }else{
        echo "Logeate o registrate para poder hacer esto.";
    }
?>