<?php
// Initialize the session
session_start();
 
// Si ya esta Logeado lo redirije 
if(isset($_SESSION["logeado"]) && $_SESSION["logeado"] === true){
    echo "Bienvenido";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $array_dataset = 
        [
            "user" => $_POST["username"],
            "pass" => $_POST["password"],
        ];
    // Validate credentials
        // Prepare a select statement
        $sql = "SELECT idusuario, mail, password FROM usuarios WHERE mail ="."'".$array_dataset["user"]."'";
        
        $data = $conn->query($sql)->fetchAll();

        $log_validate = false;
        foreach ($data as $row)         //recorro toda la consulta, o sea, cada uno de los items que traiga de la tabla en la bd
        {
            /*escucho coincidencia en usuario y pass*/
            if(strcmp($row['mail'], $array_dataset["user"])==0 && strcmp($row['password'], $array_dataset["pass"])==0){$log_validate = true;}
        }

        /*estimo resultado de consulta login*/
        if($log_validate == true)
        {

            $_SESSION["logeado"] = true;
            $_SESSION["username"] = $username;                            
            
            //echo "credenciales válidas";
        }else 
        {
            echo "<script>alert('Contraseña o Mail Invalido');</script>";
        } 
}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/animations.css">
</head>
<body>
    <div id="login-leave" class="hidden" onclick="exitlogin()"></div>    
    <section class="login-cont">
        <section class="login-back">
            
        </section>
        <section class="login-form">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">>
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
                <button class="btn-action-login">Ingresar</button>
            </form>
        </section>
    
        <button class="btn-login">Logearse</button>
        <button class="btn-register">Registrarse</button>
    </section>
</body>
</html>