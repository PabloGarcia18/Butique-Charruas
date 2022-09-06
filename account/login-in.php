<?php

    include("../services/conexion.php");
    session_start();
    $array_dataset = 
        [
            "user" => $_POST["username"],
            "pass" => $_POST["password"],
        ];
    // Validate credentials
        // Prepare a select statement
        $sql = "SELECT idusuario, mail, password, tipousuario FROM usuarios WHERE mail ="."'".$array_dataset["user"]."'";
        
        $data = $conn->query($sql)->fetchAll();

        $log_validate = false;
        foreach ($data as $row)         //recorro toda la consulta, o sea, cada uno de los items que traiga de la tabla en la bd
        {
            /*escucho coincidencia en usuario y pass*/
            $usuariosql = $row["tipousuario"];
            if(strcmp($row['mail'], $array_dataset["user"])==0 && strcmp($row['password'], $array_dataset["pass"])==0){$log_validate = true;}
        }

        /*estimo resultado de consulta login*/
        if($log_validate == true)
        {

            $_SESSION["logeado"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["tipouser"] = $usuariosql;                 
            
            echo "credenciales válidas";
        }else 
        {
            echo "Contraseña o Mail Invalido" . $_SESSION["type"];
        }
?>