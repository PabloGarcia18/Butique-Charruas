<?php
    include("./services/conexion.php");
    
    $sql = "SELECT idusuario from usuarios where mail = 'Gml@gmail.com' ";
    echo "$sql";
    $data = $conn->query($sql);
    foreach ($data as $row){
        echo $row["idusuario"];
    }
    echo strlen("54515499");
?>