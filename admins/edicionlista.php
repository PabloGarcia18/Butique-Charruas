<?php
    include("../services/conexion.php");
    $array_dataset = 
    [
        "mail" => $_POST["mail"],
        "direccion" => $_POST["direccion"],
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "telefono" => $_POST["tel"],
        "ci" => $_POST["ci"],
        "id" => $_POST["id"],
        "type" => $_POST["tipoclient"],
    ];
    if(empty($array_dataset["mail"]) || empty($array_dataset["direccion"]) || empty($array_dataset["nombre"]) || empty($array_dataset["ci"])|| empty($array_dataset["telefono"]) ){
        echo "¡No puedes dejar casilleros vacios!";
    }else{
        $id = $array_dataset["id"];
    
        $sql = "UPDATE usuarios SET 
        mail = '".$array_dataset['mail']."', 
        tipousuario = '".$array_dataset['type']."', 
        direccion = '".$array_dataset['direccion']."', 
        nombre = '".$array_dataset['nombre']."',
        apellido = '". $array_dataset['apellido'] ."',
        telefono = '".$array_dataset['telefono']."' 
        WHERE idusuario = $id";


        $conn->query($sql)->fetchAll();

        $verify = $conn->query("SELECT * FROM clientes")->fetchAll();

        $sql2 = "UPDATE clientes SET tipousuario = '".$array_dataset["type"]."', ci = '".$array_dataset["ci"]."' WHERE idusuario = $id";
        
        $conn->query($sql2)->fetchAll();
        
        echo "¡Ediccion con Exito!";
    }
        
?>