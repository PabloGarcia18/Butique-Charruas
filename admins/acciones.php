<!DOCTYPE html>
<html lang="es">
<script src="https://kit.fontawesome.com/11fdbcd7e6.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="panel-css/index.css">
<script type = "text/javascript" src="panel-js/functions.js"></script>
<body>
    <section class="lateral">
        <div class="iconos">
            <img src="../assets/iconos/logo.png" class="logo">
            <ul>
                <div class="tooltip" id="adduser" onclick="addusrs()">
                    <li> <i class="fa-solid fa-user-plus"></i></li>
                    <span class="tooltiptext">Añadir usuarios</span>
                </div>
                <div class="tooltip" id="removeuser" onclick="removeusr()">
                    <li><i class="fa-solid fa-user-large-slash"></i></li>
                    <span class="tooltiptext">Eliminar usuarios</span>
                </div>
                <div class="tooltip" id="edituser">
                    <li><i class="fa-solid fa-user-pen"></i></li>
                    <span class="tooltiptext">Editar usuarios</span>
                </div>
                <div class="tooltip" id="V-Stock" onclick="editarstock()">
                    <li> <i class="fa-solid fa-cart-flatbed"></i></li>
                    <span class="tooltiptext">Editar Productos</span>
                </div>
                </div>
            </ul>
        </div>
    </section>
</body>
</html>

<style>
html{
    background-image: url(https://365psd.com/images/istock/previews/7895/78952481-wine-seamless-pattern-vector-texture-in-hand-draw-style.jpg);
}
</style>