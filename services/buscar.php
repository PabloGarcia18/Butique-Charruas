    <div id="search-div" class="sdv">
        <form id="search-form" name="form1" method="get" action="tiendas.php">    
            <input type="text" class="Search" name="busqueda">
            <input type="submit" name="enviar" style="position: absolute; left: -9999px"/>
        </form>
        <i onclick="redirect('search')" id="close" class="fa-solid fa-xmark"></i>
    </div>
    <section class="bkg">
    </section>
    
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
#close{
    position: absolute;
    right: 1.8rem;
    top: 25px;
    z-index: 102;
    transition: all ease-in-out 1s;
    cursor: pointer;
    transition: all ease-in-out 1s;
}
.Search{
    top: 0;
    width: 100%;
    height: 60px;
    font-size: 1.5rem;
    font-family: Neutra-Text;
    transition: all ease-in-out 1s;
}
.sdv{
    position: fixed;
    z-index: 101;
    width: 100%;
    height: 60px;
    border-bottom: solid 0.1px #e3a0a0;
    background-color: #edc4c4;
    top: -100%;
    left: 0;
    transition: all ease-in-out 1s;
}
.bkg{
    position: fixed;
    background-color: #e79696;
    opacity: 0.8;
    width: 100%;
    height: 100%;
    top: -100%;
    z-index: 100;
    left: 0;
    transition: all ease-in-out 1s;
}
</style>