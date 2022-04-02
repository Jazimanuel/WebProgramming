<?php

include("config.php");

if(isset($_POST['submitEdits'])){

    $filename = $_FILES['pp']['name'];
    $tempname = $_FILES['pp']['tmp_name'];
    
    $direcloc = "FileUpload/";
    $storing = $direcloc.$filename;
    $upload = move_uploaded_file($tempname, $storing);
    

    $depan1 = $_POST['depan'];
    $tengah1 = $_POST['tengah'];
    $belakang1 = $_POST['belakang'];
    $tempat1 = $_POST['tempat'];
    $tanggal1 = $_POST['tanggal'];
    $nik1 = $_POST['nik'];
    $WN1 = $_POST['WN'];
    $email1 = $_POST['email'];
    $nhp1 = $_POST['nhp'];
    $alamat1 = $_POST['alamat'];
    $kodepos1 = $_POST['kodepos'];
    $username1 = $_POST['username'];
    $pw11 = $_POST['pw1'];


        
        $strquery_update = "UPDATE account set depan='".$depan1."',
        tengah='".$tengah1."',
        belakang='".$belakang1."',
        tempat='".$tempat1."',
        tanggal='".$tanggal1."',
        nik='".$nik1."',
        WN='".$WN1."',
        email='".$email1."',
        nhp='".$nhp1."',
        alamat='".$alamat1."',
        kodepos='".$kodepos1."',
        pp='$storing',
        pw1='".$pw11."'
        WHERE username = '".$username1."'";

        $query_update = mysqli_query($connection, $strquery_update);

        if($query_update){
            echo '<script>
            alert("UPDATE Success - Success to update to database")
            document.location.href = "profile.php"
            </script>';
        }
        else{
            echo '<script>
            alert("UPDATE ERROR - Failed to update to database")
            document.location.href = "editprofile.php"
            </script>';
        }
        
    }


?>