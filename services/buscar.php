    <form name="form1" method="get" action="tiendas.php">
        
    
        <input type="text" class="Search" name="busqueda">
        <br>
        <button type="sumbit" name="enviar" class="buscar">Buscar</button>
    </form>
    <div id="contenedor_market2">
        <section class="celda_market2">
            <?php
                    if(isset($_GET['enviar'])){
                        $busqueda = $_GET['busqueda'];

                        $consulta = $conn ->query("SELECT * FROM productos WHERE Nombre LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%'");
                        
                        foreach ($consulta as $row)
                        {
                            echo "<section onclick='carrito_charger(\"" . $row['idproducto'] . "\", \"" . $row['Nombre'] . "\", \"" . $row['precio'] . "\");'>
                            <div style=\"background-image: url(".$row['imagen'].");\"></div>
                            <p>" . $row['Nombre'] . "</p>
                            <p> ID_PRODUCTO: " . $row['idproducto'] . " </p>
                            <br>
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
.celda_market2 {
    display: grid;
    grid-template-columns: 15vw 15vw 15vw 15vw 15vw;
    grid-gap: 15px;
    justify-content: center;
}
.celda_market2 div{
    position: relative;
    width: 100%;
    height: 50%;
    top: 10px;
    border-radius: 15px 15px 0 0;
    background-size: 40% 100%;
    background-position: center;
    background-position-y: bottom;
    background-repeat: no-repeat;
}
.celda_market2 section 
{
    height: 450px;
    border-radius: 15px;
    border: solid 1px gray;
    text-align: center;
    font-family: monospace;
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    background-color: whitesmoke;
    transition: all cubic-bezier(0.39, 0.58, 0.57, 1) .5s;
}
.celda_market2 section:hover{
    transform: scale(0.99);
}
.celda_market2 section p 
{
    font-size: 0.7vw;
}
</style>