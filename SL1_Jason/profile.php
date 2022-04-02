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
    <title>profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="homes">
        <div class="navbars">
        <p>Aplikasi pengelola keuangan</p>
        
            <a href="home.php" >HOME</a>
            <a href="profile.php" class="underline">PROFILE</a>
            <a href="logout.php">LOG OUT</a>
        </div>
    <div class="contents1">
    <table>
            <tr>
                <td>Nama Depan</td>
                <td><b><?php echo $data['depan']?></b></td>
                <td>Nama Tengah</td>
                <td><b><?php echo $data['tengah']?></b></td>
                <td>Nama Belakang</td>
                <td><b><?php echo $data['belakang']?></b></td>
            </tr>
            <td></td>
            <tr>
                <td>Tempat lahir</td>
                <td><b><?php echo $data['tempat']?></b></td>
                <td>Tanggal lahir</td>
                <td><b><?php echo $data['tanggal']?></b></td>
                <td>NIK</td>
                <td><b><?php echo $data['nik']?></b></td>
            </tr>
            <td></td>

            <tr>
                <td>Warga negara</td>
                <td><b><?php echo $data['WN']?></b></td>
                <td>Email</td>
                <td><b><?php echo $data['email']?></b></td>
                <td>No Hp</td>
                <td><b><?php echo $data['nhp']?></b></td>
            </tr>
            <td></td>

            <tr>
                <td>Alamat</td>
                <td><b><?php echo $data['alamat']?></b></td>
                <td>Kode pos</td>
                <td><b><?php echo $data['kodepos']?></b></td>
                <td>Foto profil</td>
                
                <td>
                <div class="RZ">
                    <?php
                    echo "<img src='".$data['pp']."'>"; 
                    ?>
                </div>
                </td>
            </tr>
            <td></td>
            <td></td>
            <td></td>
            <tr>
                <td>
                    <a href="editprofile.php" class="LoginBTN2">Edit Profile</a>
                </td>
            
            </tr>
            <td></td>

        </table> 
    </div>
  
    </div>
    
</body>
</html>