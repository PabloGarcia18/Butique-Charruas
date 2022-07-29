<?php

    //BD CONEXION

    $hostname_bdnetframe = "localhost";
    $database_bdnetframe = "charruas";
    $username_bdnetframe = "root";
    $password_bdnetframe = "";

    $mysqli = new mysqli($hostname_bdnetframe, $username_bdnetframe, $password_bdnetframe, $database_bdnetframe);

    $sql =("SET NAMES 'utf8'");
    if ($mysqli->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }


    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>
