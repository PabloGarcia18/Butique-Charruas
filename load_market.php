<?php
    
    include("services/conexion.php");
    
    if(isset($_POST["filtro_nombre"])){
        $busqueda = $_POST["filtro_nombre"];

        if(empty($busqueda)){
            $data = $conn->query("SELECT * FROM productos WHERE Stock > 0")->fetchAll();
        }else{
            $data = $conn ->query("SELECT * FROM productos WHERE Stock > 0 AND Nombre LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%'")->fetchAll();
        }

    }else{
        $data = $conn->query("SELECT * FROM productos WHERE Stock > 0")->fetchAll();
    }
    foreach ($data as $row)
    {
        echo "
        <section id='productos'>
            <div class='vinos' style=\"background-image: url(".$row['imagen'].");\"></div>
            <section style='position: absolute;' class='contenido'>
                <h1 class='titulos'>" . $row['Nombre'] . "</h1>
                <p class='precios'>$" . $row['precio'] . "</p>
                <p class='desc'>" . $row['Descripcion'] . "</p>
                <button class=\"boton\" onclick='carrito_charger(\"" . $row['idproducto'] . "\", \"" . $row['Nombre'] . "\", \"" . $row['precio'] . "\");'>Añadir al Carro</button>
            </section>
        </section>";
    }   
?>