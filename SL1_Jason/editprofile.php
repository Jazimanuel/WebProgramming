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
    <title>EDIT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="backres">
    <h1>Edit Profile</h1>
    <br><br>
    <form name="formedit" onsubmit="return validasiEDT();" action="editprofileproses.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="depan" value="<?php echo $data["depan"] ?>"></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="tengah" value="<?php echo $data["tengah"] ?>"></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="belakang" value="<?php echo $data["belakang"] ?>"></td>
            </tr>
            <td></td>
            <tr>
                <td>Tempat lahir</td>
                <td><input type="text" name="tempat" value="<?php echo $data["tempat"] ?>"></td>
                <td>Tanggal lahir</td>
                <td><input type="date" name="tanggal" value="<?php echo $data["tanggal"] ?>"></td>
                <td>NIK</td>
                <td><input type="text" name="nik" value="<?php echo $data["nik"] ?>"></td>
            </tr>
            <td></td>

            <tr>
                <td>Warga negara</td>
                <td><input type="text" name="WN" value="<?php echo $data["WN"] ?>"></td>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $data["email"] ?>"></td>
                <td>No Hp</td>
                <td><input type="text" name="nhp" value="<?php echo $data["nhp"] ?>"></td>
            </tr>
            <td></td>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data["alamat"] ?>"></td>
                <td>Kode pos</td>
                <td><input type="text" name="kodepos" value="<?php echo $data["kodepos"] ?>"></td>
                <td>Foto profil</td>
                <td><input type="file" name="pp"  accept="image/*" required value="<?php echo $data["pp"] ?>"></td>
            </tr>
            <td></td>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $data["username"] ?>"></td>
                <td>Password 1</td>
                <td><input type="text" name="pw1" value="<?php echo $data["pw1"] ?>"></td>
                <td>Password 2</td>
                <td><input type="text" name="pw2" value="<?php echo $data["pw1"] ?>"></td>
            </tr>
            <td></td>

            <tr>
                <td><a href="profile.php" class="kembalibtn">  Kembali  </a></td>
                <td><input type="submit" name="submitEdits" value="   Edit   " class="regisbtn"></td>
            </tr>

        </table>

    </form>
    </div>

    <script>
        function validasiEDT(){
            if(document.formedit.depan.value==""){
                alert("nama depan tidak boleh kosong");
                document.formedit.depan.value.focus();
                return false;
            }
            if(document.formedit.tengah.value==""){
                alert("nama tengah tidak boleh kosong");
                document.formedit.tengah.value.focus();
                return false;
            }
            if(document.formedit.belakang.value==""){
                alert("nama belakang tidak boleh kosong");
                document.formedit.belakang.value.focus();
                return false;
            }

            if(document.formedit.tempat.value==""){
                alert("tempat tinggal tidak boleh kosong");
                document.formedit.tempat.value.focus();
                return false;
            }
            if(document.formedit.tanggal.value==""){
                alert("tanggal lahir tidak boleh kosong");
                document.formedit.tanggal.value.focus();
                return false;
            }
            if(document.formedit.nik.value==""){
                alert("NIK tidak boleh kosong");
                document.formedit.nik.value.focus();
                return false;
            }

            if(document.formedit.WN.value==""){
                alert("warga negara tidak boleh kosong");
                document.formedit.WN.value.focus();
                return false;
            }
            if(document.formedit.email.value==""){
                alert("email tidak boleh kosong");
                document.formedit.email.value.focus();
                return false;
            }
            if(document.formedit.email.value.endswith(".com")!=true){
                alert("email TIDAK VALID");
                document.formedit.email.value.focus();
                return false;
            }
            if(document.formedit.nhp.value==""){
                alert("No HP tidak boleh kosong");
                document.formedit.nhp.value.focus();
                return false;
            }
            if(isNan(document.formedit.nhp.value)){
                alert("No Hp TIDAK VALID");
                document.formedit.nhp.value.focus();
                return false;
            }
            if(document.formedit.alamat.value==""){
                alert("alamat tidak boleh kosong");
                document.formedit.alamat.value.focus();
                return false;
            }
            if(document.formedit.kodepos.value==""){
                alert("kodepos tidak boleh kosong");
                document.formedit.kodepos.value.focus();
                return false;
            }
            if(document.formedit.pp.value==""){
                alert("PP tidak boleh kosong");
                document.formedit.pp.value.focus();
                return false;
            }
            if(document.formedit.username.value == ""){
                alert("username tidak boleh kosong");
                document.formedit.username.focus();
                return false;
            }
            if(document.formedit.pw1.value == ""){
                alert("password1 tidak boleh kosong");
                document.formedit.pw1.focus();
                return false;
            }
            if(document.formedit.pw2.value == ""){
                alert("password2 tidak boleh kosong");
                document.formedit.pw2.focus();
                return false;
            }
            if(document.formedit.pw2.value != document.formedit.pw1.value){
                alert("password 1 dan 2 HARUS SAMA");
                return false;
            }
        }

    </script>
</body>
</html>