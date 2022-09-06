<?php
// Initialize the session
session_start();
// Si ya esta Logeado lo redirije 
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
    <script type = "text/javascript" src="./js/accounts.js"></script>
</head>
<body>
    <div id="login-leave" class="hidden" onclick="exitlogin();"></div>    
    <section class="login-cont">
        <section class="login-back">
            
        </section>
        <section class="login-form" id="login">
            <form method="POST" enctype="multipart/form-data" id="form_fetch_login">
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
                <button class="btn-action-login" onclick="fetch_register();">Registrarse</button>
            </form>
        </section>
        
        <button class="btn-login" onclick="showlogin();">Logearse</button>
        <button class="btn-register" onclick="showreg();">Registrarse</button>
    </section>
</body>
</html>