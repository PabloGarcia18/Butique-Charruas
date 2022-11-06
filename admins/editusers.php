<?php
    session_start();
    include("../services/conexion.php");
    
    if(isset($_POST["filtrar_user"])){
        $busqueda = $_POST["filtrar_user"];

        if(empty($busqueda)){
            return false;
        }else{
            $data = $conn ->query("SELECT * FROM usuarios WHERE idusuario = $busqueda")->fetchAll();
            $dato2 = $conn ->query("SELECT * FROM clientes WHERE idusuario = $busqueda")->fetchAll();
        }

    }else{
        return true;
    }
    $GLOBALS['ci_usr'] = "unset";
    $GLOBALS['type_usr'] = "unset";
    foreach ($dato2 as $row){
        $GLOBALS['ci_usr'] = $row['ci'];
        $GLOBALS['type_usr'] = $row['tipousuario'];
    }

    foreach ($data as $row)
    {
        echo "
        <p class='usuarios'> 
        Nombre: " . $row['nombre'] . 
        "<br>Apellido: " . $row['apellido'] .
        "<br>Mail: " . $row['mail'] .
        "<br>Tipo de usuario: ". $row['tipousuario']. 
        "<br>Direccion: ". $row['direccion'].
        "<br>Telefono: ". $row['telefono'].
        "<br>ID: ". $row['idusuario'].
        "<br>CI: ". $GLOBALS['ci_usr'].
        "<br>Tipo de Cliente: ". $GLOBALS['type_usr'].
        "</p>";
        $tipo = $row["tipousuario"];
        $b = $_SESSION['tipouser'];
        if($tipo === $b || $tipo === "Superadministrador"){
            echo "<p>No podes editar a un $tipo</p>";
        }else{
            echo 
            "
                <form method='POST' id='userconfirm'> 
                    <input name='id' required style='display: none;' type='text' value='". $row['idusuario']."'>
                    <input type='text' required placeholder='Mail: ". $row['mail']."' name='mail'>
                    <input type='text' required placeholder='Nombre: ". $row['nombre']."' name='nombre'>
                    <input type='text' placeholder='Apellido: ". $row['apellido']."' name='apellido'>
                    <input type='text' required placeholder='Direccion: ". $row['direccion']."' name='direccion'>
                    <input type='tel' placeholder='Tel: ". $row['telefono']."' minLength='9' maxLength='9' name='tel'>
                    <input type='tel' required placeholder='CI/RUT: ". $GLOBALS['ci_usr']."' minLength='9' maxLength='12' name='ci'>
                    <select name='tipoclient'>
                        <option value='". $GLOBALS['type_usr']."'>Default (". $GLOBALS['type_usr'].")</option>
                        <option value='Empresa'>Empresa</option>
                        <option value='Cliente'>Cliente</option>
                    </select>
                    
                    <button onclick='confirmar()'>Confirmar</button> 
                </form>
            ";
        }
        
    }   
?>