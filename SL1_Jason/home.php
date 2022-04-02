<?php
session_start();
include("config.php");
$strquery_select = "SELECT * FROM account WHERE username = '".$_SESSION['Sesusername']."'";
$query_select = mysqli_query($connection, $strquery_select);
$data = mysqli_fetch_array($query_select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="homes">
        <div class="navbars">
        <p>Aplikasi pengelola keuangan</p>
        
            <a href="home.php" class="underline">HOME</a>
            <a href="profile.php">PROFILE</a>
            <a href="logout.php">LOG OUT</a>
        </div>
    <div class="contents">
            <p>
            Halo <b><?php echo $data['depan']," ",$data['tengah']," ",$data['belakang'] ?></b>, Selamat datang di aplikasi pengelola keuangan. 
            </p>  
    </div>
  
    </div>
    
</body>
</html>