<?php
    /*Carga sql*/
        include('./header/nav-2.php');
        include('./services/conexion.php');
        include('./account/login.php');
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="CONTACTO">
        <section id="div1">

            <p id="texto1">Aportando calidad dia a dia.</p>
            <p id="texto2">Pongase en contacto con Contacto@ButiqueCharruas.com</p>

        </section>




        <img id="imagen" src="https://lilosocial.com/wp-content/uploads/2021/02/icon_6.svg";>




        <form id="div_login" method="post" enctype="text/plain">
            <ul>

                <p>Nombre *</p>
                <li>
            <input type="text" name="name" placeholder="Type Name">
                </li>

                <p>Asunto *</p>
            <input type="text " name="asunto" placeholder="Asunto">
            <li>

                <p>Telefono </p>
                <input type="text" name="phone" placeholder="Telefono">

            </li>
            <p>Direccion de E-Mail *</p>
            <input type="email" name="email" placeholder="Email">

            <li>
                <p>Mensaje *</p>
                <input type="text " name="mensaje" placeholder="En que te podemos ayudar?">

            </li>


            </ul>
            <button class="Sendmessage">Send message</button>
        </form>
        
    </section>
    <?php
    include("./footer/contacto.php");
    ?>
</body>
</html>
<style>
html{
    background-image: url(https://img.freepik.com/free-vector/white-abstract-background_23-2148810353.jpg?w=2000);
    background-size: cover;
}
input{
    border: 0;
    border-bottom: 1px solid;
    background: none;
    height: 30px;
    width: 100%;

}
input:focus-visible{
    border: 0;
    border-bottom: 1px solid red;
    outline: none;
}
body{
    padding:0;
    margin:0;
}
.CONTACTO{
    position: relative;
    width: 100%;
    height: 100%;
    
}
#div1
{

    width: 250px;
    height: 200px;
    position: relative;
    margin-left: 100px;
    margin-top: 100px;
}
#texto1
{
    font-size: 25px;
}
#texto2

{
    font-size: 17px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.Sendmessage
{
    margin-top: 25px;
    position: relative;
    width: 70%;
    height: 40px;
    color: whitesmoke;
    border-radius: 15px;
    border: 1px solid;
    background-color: #ed5b06;
    margin-left: 25px;
    cursor: pointer;
    font-family: 'Neutra-Text';
    font-size: 1rem;
}
.Sendmessage:hover
{
    background-color: #ff5e00;
}
#imagen
{
    width: 500px;
    height: 500px;
    position: relative;
    margin-left: 200px;
}
#div_login
{
    float: right;
    margin-top: -200px;
    margin-right: 500px;
    position: relative;
}
#div4
{
    width: 300px;
    height: 300px;
    float: right;
    margin-right: -350px;
    margin-top: 200px;
}
</style>