<?php
    include("../services/conexion.php");
    
    if(isset($_POST["filtrar_user"])){
        $accion = $_POST["filtrar_user"];

        if(empty($accion)){
            return false;
        }else{
            $data = $conn ->query("DELETE FROM usuarios WHERE idusuario = $accion")->fetchAll();
            $data2 = $conn ->query("DELETE FROM clientes WHERE idusuario = $accion")->fetchAll();
            
        }
    }
?>