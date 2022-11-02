<?php
    include("../services/conexion.php");
    $array_dataset = 
    [
        "mail" => trim($_POST["mail"]," "),
        "pass" => $_POST["reg-pass"],
        "pass1" => $_POST["reg-pass2"],
        "direccion" => $_POST["direccion"],
        "ci" => $_POST["ci"],
    ];

    $email = test_input($_POST["mail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Ingrese un Email Valido";
        return false;
    }
    if ($_POST["reg-pass"] !== $_POST["reg-pass2"]){
        echo "Las contraseñas no coinciden";
        return false;
    }
    //verificar si esta registrado
    $sql = "SELECT mail FROM usuarios WHERE mail ="."'".$array_dataset["mail"]."'";
    
    $data = $conn->query($sql)->fetchAll();
    $flag_exist = false;
    foreach ($data as $row)         //recorro toda la consulta, o sea, cada uno de los items que traiga de la tabla en la bd
    {
        /*escucho coincidencia en usuario y pass*/
        if(strcmp($row['mail'], $array_dataset["mail"])==0){
            $flag_exist = true;
        }
    }
    if($flag_exist){
        echo "El mail Exsiste";
    }else{
        //$sql = "INSERT INTO usuarios (`mail`, `password`, `tipousuario`) VALUES (".$array_dataset["mail"].", ".$array_dataset["pass"].", 'Cliente');";
       
        $sql = "INSERT INTO usuarios (mail, password, tipousuario, direccion) VALUES (?,?,?,?)";
        $conn->prepare($sql)->execute([$array_dataset["mail"], $array_dataset["pass"], "Cliente", $array_dataset["direccion"]]);
        
        $f = $array_dataset["mail"];
        
        $sql2 = "SELECT idusuario from usuarios where mail = '$f' ";
        
        $data2 = $conn->query($sql2);
        
        foreach ($data2 as $row){
            $iduser = $row["idusuario"];
        }
        
        $sql3 = "INSERT INTO clientes (idusuario, tipousuario, ci) VALUES (?,?,?)";
        if(strlen($array_dataset["ci"]) === 8){
            $client = "Cliente";
        }else{
            $client = "Empresa";
        }
        $conn->prepare($sql3)->execute([$iduser, $client, $array_dataset["ci"]]);
        echo "Registrado con exito";
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>