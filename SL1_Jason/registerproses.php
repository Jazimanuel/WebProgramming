<?php

session_start();
include("config.php");

if(isset($_POST['submitregis'])){
    $depan = $_POST['depan'];
    $tengah = $_POST['tengah'];
    $belakang = $_POST['belakang'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $nik = $_POST['nik'];
    $WN = $_POST['WN'];
    $email = $_POST['email'];
    $nhp = $_POST['nhp'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
    $username = $_POST['username'];
    $pw1 = $_POST['pw1'];

    $filename = $_FILES['pp']['name'];
    $tempname = $_FILES['pp']['tmp_name'];
    $pp = addslashes(file_get_contents($tempname));

    $direcloc = "FileUpload/";
    $storing = $direcloc.$filename;
    $upload = move_uploaded_file($tempname, $storing);

    if($upload==true){
        $_SESSION['Sesdepan']=$depan;
        $_SESSION['Sestengah']=$tengah;
        $_SESSION['Sesbelakang']=$belakang;
        $_SESSION['Sestempat']=$tempat;
        $_SESSION['Sestanggal']=$tanggal;
        $_SESSION['Sesnik']=$nik;
        $_SESSION['SesWN']=$WN;
        $_SESSION['Sesemail']=$email;
        $_SESSION['Sesnhp']=$nhp;
        $_SESSION['Sesalamat']=$alamat;
        $_SESSION['Seskodepos']=$kodepos;
        $_SESSION['Sesusername']=$username;
        $_SESSION['SesPW']=$pw1;
        $_SESSION['direcloc']=$direcloc;
        $_SESSION['filename']=$filename;

        $strquery_insert = "INSERT INTO account VALUES('".$depan."','".$tengah."',
        '".$belakang."','".$tempat."','".$tanggal."',
        '".$nik."','".$WN."','".$email."',
        '".$nhp."','".$alamat."','".$kodepos."',
        '$storing','".$username."','".$pw1."')";

        $query_insert = mysqli_query($connection, $strquery_insert);

        if($query_insert){
            echo '<script>
            alert("REGISTER SUCCESS - Success insert into database")
            document.location.href = "welcome.php"
            </script>';
        }
        else{
            echo '<script>
            alert("REGISTER ERROR - Failed to insert to database")
            document.location.href = "register.php"
            </script>';
        }
        
    }
    else{
        echo '<script>
        ("ERROR REGISTER!")
        document.location.href = "register.php";
        </script>';
    }

}

?>