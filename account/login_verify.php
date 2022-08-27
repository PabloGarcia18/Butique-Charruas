<?php
    /*me aseguro que existan los recursos por POST, con esto solo se procesa si se proviene del form configurado
     para ello*/
    if(!empty($_POST["username"]) && !empty( $_POST["password"]) && isset($_POST["username"]) && isset($_POST["password"])){process_login();}else 
    {
        /*redirecciono a login si es que no se provino con DATA SET via POST desde el*/
        header("Location: http://localhost/Butique-Charruas/Index.php");      //se debe poner la direccion del login.php
        exit();
    }
    
    function process_login()
    {
        include('../services/conexion.php'); //include nos permite implementar todo el codigo de otro archivo

        /*datos POST*/
        $array_dataset = 
        [
            "user" => $_POST["username"],
            "pass" => $_POST["password"],
        ];

        /*configuracion consulta*/
        $consulta_a_basededatos = "SELECT * FROM usuarios";        //aqui debo poner la consulta que yo desee realizar.


        //consulta automatica
        $data = $conn->query($consulta_a_basededatos)->fetchAll();
    
        /*recorro consulta*/
        $log_validate = false;
        foreach ($data as $row)         //recorro toda la consulta, o sea, cada uno de los items que traiga de la tabla en la bd
        {
            /*escucho coincidencia en usuario y pass*/
            if(strcmp($row['mail'], $array_dataset["user"])==0 && strcmp($row['password'], $array_dataset["pass"])==0){$log_validate = true;}
        }

        /*estimo resultado de consulta login*/
        if($log_validate == true)
        {
            echo "credenciales válidas";
        }else 
        {
            echo "credenciales invalidas";
        } 
    };
?>