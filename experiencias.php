<?php
        /*Carga sql*/
            include('header/nav-2.php');
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    

    <div id="search-div" class="sdv">
        <form id="search-form" name="form1" method="get" action="tiendas.php">    
            <input type="text" class="Search" name="busqueda">
        </form>
        <i onclick="redirect('search')" id="close" class="fa-solid fa-xmark"></i>
    </div>
    <section class="bkg">
    </section>
</body>
</html>
<script>



</script>
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
    width: 100%;
    height: 60px;
    font-size: 1.5rem;
    font-family: Neutra-Text;
    transition: all ease-in-out 1s;
}
.sdv{
    position: absolute;
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