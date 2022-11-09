<?php
    include("../services/conexion.php");
    
    if(isset($_POST["filtrarprod"])){
        $accion = $_POST["filtrarprod"];

        if(empty($accion)){
            return false;
        }else{
            $data = $conn ->query("DELETE FROM productos WHERE idproducto = $accion")->fetchAll();
            
        }
    }
?>