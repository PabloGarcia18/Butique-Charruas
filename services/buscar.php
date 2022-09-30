    <div id="search-div">
        <form name="form1" method="get" action="tiendas.php">    
            <input type="text" class="Search" name="busqueda">
            <br>
            <button type="sumbit" name="enviar" class="buscar">Buscar</button>
        </form>


    </div>
    
    <div id="contenedor_market2">
        <section class="celda_market2">
            <?php
                    if(isset($_GET['enviar'])){
                        $busqueda = $_GET['busqueda'];

                        $consulta = $conn ->query("SELECT * FROM productos WHERE Stock > 0 AND Nombre LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%'");
                        
                        foreach ($consulta as $row)
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
                    }    
                    
                ?>
        </section>
    </div>

<style>

#search-div{
    position: relative;
    display: none;
    width: 100%;
    z-index: 99;
    opacity: 0;
    transition: all ease-in-out 1s;
}
</style>