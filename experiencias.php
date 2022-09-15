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
    <div class="tring"></div>
    <div class="cont">


    </div>
</body>
</html>

<style>
.tring {
    position: absolute;
    display: unset;
    top: 53px;
    right: 1vh;
    width: 0;
    height: 0;
    border-right: 15px solid transparent;
    border-left: 15px solid transparent;
    border-bottom: 22px solid #262424;
    transition: all ease-in-out .4s;
}
.cont{
    position: absolute;
    display: unset;
    top: 75px;
    right: 1vh;
    width: 15vw;
    min-height: 250px;
    height: auto;
    background-color: #262424;
    border-radius: 6px 1px 6px 6px;
    transition: all ease-in-out .4s;
}


</style>