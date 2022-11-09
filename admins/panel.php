<?php 
session_start();
 
// Si ya esta Logeado y es admin
if(isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true && $_SESSION["tipouser"] === "Administrador"){
    echo "Bienvenido";
}else{
    header("Location: ../Index.php");
    echo "No eres administrador";
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel-css/index.css">
    <title>Panel de Administrador</title>
</head>
<body>
    <?php 
    include('acciones.php');
    include('../services/conexion.php');
    ?>

    <section class="interaccion">
        <form method="POST" id="usuariosadd" class="agregaru">
            <h1>Agregar Usuario.</h1>
            <div class="reg-username">
                    <input 
                        type="text" 
                        name="mail"
                        class="mail-input"
                        autocomplete="off"
                        placeholder="Ingrese su mail"
                        required
                    />
                </div>
                <div class="reg-password">
                    <input 
                        type="password" 
                        name="reg-pass"
                        class="regpass-input"
                        autocomplete="off"
                        placeholder="Ingrese su contraseña"
                        minlength="8"
                        required
                    />
                </div>
                <div class="reg-confirm-pass">
                    <input 
                        type="password" 
                        name="reg-pass2"
                        class="regpass-input"
                        autocomplete="off"
                        placeholder="Confirme su contraseña"
                        required
                    />
                </div>
                <div class="nombre">
                    <input 
                        type="text" 
                        name="nombre"
                        class="name-input"
                        autocomplete="off"
                        placeholder="Escriba su Nombre"
                        required
                    />
                </div>
                <div class="apellido">
                    <input 
                        type="text" 
                        name="apellido"
                        class="apellido-input"
                        autocomplete="off"
                        placeholder="Escriba su Apellido"
                        required
                    />
                </div>
                <div class="telefono">
                    <input 
                        type="tel" 
                        name="telefono"
                        class="tel-input"
                        autocomplete="off"
                        placeholder="Escriba su Numero de Telefono"
                        minLength="9" maxLength="9"
                        
                        
                        required
                    />
                </div>
                <div class="direccion">
                    <input 
                        type="text" 
                        name="direccion"
                        class="direccion-input"
                        autocomplete="off"
                        placeholder="Escriba su direccion"
                        required
                    />
                </div>
                <div class="ci">
                    <input 
                        type="tel" 
                        name="ci"
                        class="ci-input"
                        autocomplete="off"
                        placeholder="Escriba su CI o Rut"
                        minLength="9" maxLength="12"
                        required
                    />
                </div>

            <button onclick="fetch_add();">Agregar Usuario</button>  
        </form>
        <div class="eliminar">
            <h1>Eliminar Usuario.</h1>    
            <form id="buscar-usr" method="POST" name="form1" id="buscar_fetch">  
                <input type="text" class="Search" name="busqueda" placeholder="Buscar Usuario.." onkeypress="buscar_usr()"> 
                <i class="fa fa-search" id="busqueda" onclick="buscar_usr()"></i>
                
            </form>
            <div id="eliminar">
                    

            </div>
            <div id="accionesusr">

            </div>
        </div>
        <div class="editusr">
            <h1>Editar Usuario.</h1>
            <form id="buscar-usr2" method="POST" name="form1" id="buscar_fetch2">  
                <input type="text" class="Search2" name="busqueda" placeholder="Buscar Usuario.." onkeypress="buscar_usr2()"> 
                <i class="fa fa-search" id="busqueda" onclick="buscar_usr2()"></i>
            </form>
            <div id="usuario-edit">

            </div>
            <div id="acciones-edit">

            </div>
        </div>
        <div class="prodedit">
            <div class="productosadd">
                <h1>Añadir Productos</h1>
                <form id="editproductof" method="post" enctype="multipart/form-data" >
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="desc" placeholder="Descripcion">
                    <input type="text" name="precio" placeholder="Precio">
                    <input type="text" name="stock" placeholder="Stock">
                    <input type="text" name="etiq" placeholder="Etiquetas">
                    <input type="file" name="my_file" /><br /><br />
                    <button type="sumbit" onclick="fetch_editp();">Agregar Producto</button>
                </form>
            </div>
            <div class="buscarprod">
                <form id="buscar-usr3" method="POST" name="form1" id="buscar_fetch3">  
                    <input type="text" class="Search3" name="busqueda2" placeholder="Buscar Producto.." onkeypress="buscar_prod()"> 
                </form>
                <div id="mostrar_prod">

                </div>
                <div id="edit_prod">

                </div>
            </div>
        </div>
        
    </section>
</body>
</html>
<style>
#editarproductofinal{
    display: inline-grid;
    width: 90%;
    height: 30%;
}
.prodedit{
    display: inline-flex;
}
.Search3{
    width: 50%;
    height: 30px;
}
#buscar-usr3{
    position: absolute;
    width: 100%;
}
.buscarprod{
    display: none;
    position: relative;
    width: 100%;
    height: 100%;
}
#edit_prod{
    position: relative;
    width: 50%;
    right: 0;
    margin-left: 15px;
    top: 0;
}
#mostrar_prod{
    position: relative;
    /* width: 50%; */
    max-height: 70vh;
    width: 50%;
    overflow-y: auto;
    overflow-x: hidden;
    top: 70px;
    /* left: 25px; */
    border-top: groove;
    border-left: 2px solid #0000009c;
}
#editproductof{
    display: grid;
}
#editproductof input, #editproductof button{
    width: 300px;
    height: 45px;
}
.productosadd{
    position: relative;
    display: none;
    top: 50px;
    left: 5rem;
    width: 50%;
    height: 300px;
    justify-content: end;
}
#userconfirm{
    position: absolute;
    top: 0;
    right: 5rem;
    width: 50%;
    height: 300px;
    justify-content: end;
}
#userconfirm input, select{
    width: 300px;
    height: 45px;
}
#userconfirm button{
    width: 120px;
    height: 30px;
    position: relative;
    left: 32%;
}
.editusr h1, .eliminar h1{
    position: absolute;
    top: -20px;
    left: 39%;
}
#accionesusr, #acciones-edit{
    position: relative;
    width: 45%;
    top: 94px;
    height: 70vh;
    left: 34px;
}
#accionesusr form, #acciones-edit form{
    display: inline-grid;
}
#accionesusr p, #acciones-edit p{
    margin-bottom: 2px;
}
#buscar-usr, #buscar-usr2{
    height: 30px;
    position: absolute;
    top: 35px;
    left: 105px;
}
.userinfo p{
    padding-left: 5px ;
}
.userinfo:hover, .info:hover{
    cursor: pointer;
    background-color: lightgreen;
}
.eliminar, .editusr{
    display: none;
    position: relative;
    width: 100%;
    height: 100%;
}
#eliminar, #usuario-edit{
    position: relative;
    width: 50%;
    max-height: 70vh;
    overflow-y: auto;
    overflow-x: hidden;
    top: 94px;
    left: 25px;
    border-top: groove;
    border-left: 2px solid #0000009c;
}
#eliminar::-webkit-scrollbar, #usuario-edit::-webkit-scrollbar{
  width: 0.3em;
}
 
#eliminar::-webkit-scrollbar-thumb, #usuario-edit::-webkit-scrollbar-thumb{
  background-color: #0000009c;
}
.usuarios{
    position: relative;
}
.agregaru{
    display: none;
    position: relative;
    grid-gap: 5px;
    justify-items: center;
    top: 50px;
    left: 50px;
}
.agregaru input{
    height: 30px;
    width: 200px;
}
.interaccion{
    position: relative;
    top: 35px;
    left: 135px;
    width: 75vw;
    height: 80vh;
    max-height: 80vh;
    border: 1px solid;
    background-color: whitesmoke;
}
</style>