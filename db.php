<?php
    $users = array("Pablo"=>"4321", "Katy"=>"1234", "Ignacio"=>"4321", "Chris"=>"1234", "Juan"=>"4321", "Martin"=>"1234");
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['username'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>