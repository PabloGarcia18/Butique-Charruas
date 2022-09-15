<?php

    // connect to the bookdb database
    include("../services/conexion.php");

    $id = $_POST['id'];
    $cantidad = 0;


    $data = $conn->query("SELECT * FROM productos")->fetchAll();
    
    foreach ($data as $row)
    {
        if(strcmp($row['idproducto'], $id)==0){$cantidad = $row['Stock'];}
    }

    $cantidad = $cantidad - 1;

    $sql = "UPDATE productos SET Stock=? WHERE idproducto=?";
    $conn->prepare($sql)->execute([$cantidad, $id]);

    echo "UPDATE DATABASE realizado con exito.";