<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butique</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.ico">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <script type = "text/javascript" src="../js/General-Functions.js"></script>
</head>
<body>
    <div class="menu-container">
    <img src="../assets/logo.png" onclick="redirect('Home')" class="logo">    
    </div>

    <div class="login-container">
        <div class="username-container">
            <input
                type="text" 
                id="username"
                class="user-input"
                autocomplete="off"
                placeholder="Ingrese su Usuario"
                required
                />
                <label class="label" for="username">Usuario</label>
        </div>
        <div class="password-container">
            <input 
            type="password" 
            id="password"
            class="password-input" 
            autocomplete="off"
            placeholder="Ingrese su Contraseña"
            required
            />
            <label class="pass-label" for="password">Contraseña</label>
        </div>
        <button>Logearse</button>
    </div>
</body>
<script type = "text/javascript" src="../js/login.js"></script>
</html>