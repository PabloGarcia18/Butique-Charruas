<?php
$servername = "localhost";
$sqluser = "root";
$sqlpassword = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_charruas", $sqluser, $sqlpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //echo "<script>console.log('Conexion con Exito')</script>";
} catch(PDOException $e) {
    //echo "<script>console.error(".$e->getMessage().")</script>";
}
?>
