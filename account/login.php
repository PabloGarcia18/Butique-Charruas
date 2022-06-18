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
    <form method="POST" action="../db.php" class="login-container">
        <div class="username-container">
            <input
                type="text" 
                name="username"
                class="user-input"
                autocomplete="off"
                placeholder="Ingrese su usuario"
                required
            />
            <label class="label" for="username">Usuario</label>
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
            <label class="pass-label" for="password">Contraseña</label>
        </div>
        <button>Logearse</button>
    </form>
</body>
<script type = "text/javascript" src="../js/login.js"></script>
</html>