<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
</head>
<body>
    <div id="login-leave" class="hidden" onclick="exitlogin()"></div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="login-container" class="hidden">
       
        <div class="username-container">
            <input
                type="text" 
                name="username"
                class="user-input"
                autocomplete="off"
                placeholder="Ingrese su usuario"
                required
                value="usuario"
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
            value="password"
            required
            />
            <label class="pass-label" for="password">Contraseña</label>
        </div>
        <button>Logearse</button>
    </form>
</body>
<script type = "text/javascript" src="../js/login.js"></script>
</html>

<?php
$accounts = array(

    1 => array(
        'username' => 'Pablo18',
        'email' => 'PabloGarcia18@gmail.com',
        'password' => '12345'

    ),
    2 => array(
        'username' => 'KatyM',
        'email' => 'KatyMagallanes@gmail.com',
        'password' => '43215'
    ),
    3 => array(
        'username' => 'Crhist',
        'email' => 'Crhistian@gmail.com',
        'password' => '3216'
    )
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usernamefound = FALSE;
    
    
    foreach ($accounts as $account) {
        if ($account['username'] == $_POST['username']) {
            if ($account['password'] == $_POST['password']) {
                echo "<script>
                redirect('Home')
                </script>";
            } else {
                echo "<script> alert('Contraseña invalida')</script>";
            }
            $usernamefound = TRUE;
            break;
        }
    }
    if ($usernamefound === FALSE) {
        echo "<script> alert('Usuario invalido')</script>";
    }
}
?>