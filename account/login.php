<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/cuentas.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
    <script type = "text/javascript" src="./js/accounts.js"></script>
</head>
<body>
    <div id="login-leave" class="hidden" onclick="exitlogin();"></div>    
    <section class="login-cont">
        <i onclick="exitlogin();" id="cerrar" class="fa-solid fa-xmark"></i>
        <section class="login-back">
            <button class="btn-login" onclick="showlogin();">Logearse</button>
            <button class="btn-register" onclick="showreg();">Registrarse</button>
        </section>
        <section class="login-form" id="login">
            <form method="POST" enctype="multipart/form-data" id="form_fetch_login">
                <label>Bienvenido</label>
                <hr>
                <div class="username-container">
                    <input
                        type="text" 
                        name="username"
                        class="user-input"
                        autocomplete="off"
                        placeholder="Ingrese su mail"
                        required
                    />
                </div>
                <div class="password-container">
                    <input 
                    type="password" 
                    name="password"
                    class="password-input" 
                    autocomplete="off"
                    placeholder="Ingrese su contraseña"
                    required
                    />
                </div>
                <button class="btn-action-login" onclick="fetch_login();">Ingresar</button>
            </form>
        </section>
        <section class="register-form" style="display: none;" id="register">
            <form method="POST" id="form_fetch_register">
                <label>Mail y Contraseña</label>
                <hr>
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
                <label>Datos</label>
                <hr>
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
                <button class="btn-action-login" onclick="fetch_register();">Registrarse</button>
            </form>
        </section>
    </section>
</body>
</html>