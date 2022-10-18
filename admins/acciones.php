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
                <div class="tooltip" id="C-Usuarios" onclick="show()">
                    <li><i class="fa-solid fa-user-gear"></i></li>
                    <span class="tooltiptext">Control de Usuarios</span>
                </div>
                <div class="tooltip" id="adduser" style="display: none;" onclick="adduser()">
                    <li> <i class="fa-solid fa-user-plus"></i></li>
                    <span class="tooltiptext">Añadir usuarios</span>
                </div>
                <div class="tooltip" id="removeuser" style="display: none;">
                    <li><i class="fa-solid fa-user-large-slash"></i></li>
                    <span class="tooltiptext">Eliminar usuarios</span>
                </div>
                <div class="tooltip" id="edituser" style="display: none;">
                    <li><i class="fa-solid fa-user-pen"></i></li>
                    <span class="tooltiptext">Editar usuarios</span>
                </div>
                <li>  Stock</li>
                <li> <i class="fa-solid fa-cart-flatbed"></i></li>
                <li> /Entradas</li>
                <li>  /Salidas</li>
                <li>  /Edicion</li>
                <li>  /Facturas</li>
            </ul>
        </div>
    </section>
</body>
</html>