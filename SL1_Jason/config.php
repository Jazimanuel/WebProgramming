<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name = "aplikasipengelolakeuangan";

    $connection = mysqli_connect($server,$username,$password,$database_name);

    if(!$connection){
        echo'<script> alert("Error connection to database") document.location.href = "welcome.php" </script>';
    }

?>