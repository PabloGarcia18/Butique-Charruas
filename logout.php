<?php 
    
    include("./header/nav-2.php");
    session_destroy();
    echo '<script type="text/javascript">
    location.replace("../Index.php"); 
    localStorage.removeItem("usr_status");
    </script>';
?>