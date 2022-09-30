<?php
    include("services/conexion.php");
    
    $data = $conn->query("SELECT * FROM productos WHERE Stock > 0")->fetchAll();

    foreach ($data as $row)
    {
        echo "<section onclick='carrito_charger(\"" . $row['idproducto'] . "\", \"" . $row['Nombre'] . "\", \"" . $row['precio'] . "\");'>
        <div style=\"background-image: url(".$row['imagen'].");\"></div>
        <br>
        <h1>" . $row['Nombre'] . "</h1>
        <p>" . $row['Descripcion'] . "</p>
        <p>STOCK: " .$row['Stock']. "</p>
        <p>PRECIO: " . $row['precio'] . "</p>
        </section>";
    }


?>