<?php
    include("services/conexion.php");
    
    if(isset($_POST["filtro_nombre"])){
        $busqueda = $_POST["filtro_nombre"];

        if(empty($busqueda)){
            $data = $conn->query("SELECT * FROM productos WHERE Stock > 0")->fetchAll();
        }else if($busqueda === "recomendado"){
            $data = $conn ->query("SELECT * FROM productos WHERE Stock > 0 AND etiquetas LIKE '%recomendado%'")->fetchAll();
        }else{
            $data = $conn ->query("SELECT * FROM productos WHERE Stock > 0 AND Nombre LIKE '%$busqueda%' OR etiquetas LIKE '%$busqueda%'")->fetchAll();
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
                <button id=\"boton\" onclick='carrito_charger(\"" . $row['idproducto'] . "\", \"" . $row['Nombre'] . "\", \"" . $row['precio'] . "\", \"" . $row['imagen'] . "\");'>Añadir al Carro 
                <i id='carting" . $row['idproducto'] . "' class='fa-solid fa-cart-shopping' style='
                position: relative;
                color: whitesmoke;
                left: 0;
                transition: all cubic-bezier(0.42, 0, 0.59, 1.15) 1s;
                '></i> </button>
            </section>
        </section>";
    }   
?>