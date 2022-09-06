<?php
    include("services/conexion.php");

    $data = $conn->query("SELECT * FROM productos")->fetchAll();

    foreach ($data as $row)
    {
        echo "<section onclick='carrito_charger(\"" . $row['idproducto'] . "\", \"" . $row['Nombre'] . "\", \"" . $row['precio'] . "\");'><p>" . $row['Nombre'] . "</p><p> ID_PRODUCTO: " . $row['idproducto'] . " </p><br><p>" . $row['Descripcion'] . "</p><br><p>STOCK: " .$row['Stock']. "</p><p>PRECIO: " . $row['precio'] . "</p></section>";
    }
?>