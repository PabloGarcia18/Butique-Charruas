<?php 
    include("../services/conexion.php");

    $array_dataset = 
    [
        "nombre" => $_POST["nombre"],
        "desc" => $_POST["desc"],
        "precio" => $_POST["precio"],
        "stock" => $_POST["stock"],
        "etiq" => $_POST["etiq"],
    ];

    if (($_FILES['my_file']['name']!=""))
    {
    // Where the file is going to be stored
        $target_dir = "../assets/productos/";
        $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
    // Check if file already exists
    if (file_exists($path_filename_ext) || $ext != "png"){
        echo "La imagen ya esta cargada o el formato no es valido.";
    }else{
        move_uploaded_file($temp_name,$path_filename_ext);
        $sql = "INSERT INTO productos (precio, nombre, Descripcion, Stock, imagen, etiquetas) VALUES (?,?,?,?,?,?)";
        $conn->prepare($sql)->execute([$array_dataset["precio"], $array_dataset["nombre"], $array_dataset["desc"],$array_dataset["stock"], $path_filename_ext,$array_dataset["etiq"]]);
        echo "Congratulations! File Uploaded Successfully. $path_filename_ext $ext";
        
    }
    }
    /*
    $_FILES['file_name']['name']
    $_FILES['file_name']['tmp_name']
    $_FILES['file_name']['size']
    $_FILES['file_name']['type']
*/ 
    ?>

    