<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="backres">
    <h1>Register</h1>
    <br><br>
    <form name="formregis" onsubmit="return validasiRG();" action="registerproses.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="depan"></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="tengah"></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="belakang"></td>
            </tr>
            <td></td>
            <tr>
                <td>Tempat lahir</td>
                <td><input type="text" name="tempat"></td>
                <td>Tanggal lahir</td>
                <td><input type="date" name="tanggal"></td>
                <td>NIK</td>
                <td><input type="text" name="nik"></td>
            </tr>
            <td></td>

            <tr>
                <td>Warga negara</td>
                <td><input type="text" name="WN"></td>
                <td>Email</td>
                <td><input type="text" name="email"></td>
                <td>No Hp</td>
                <td><input type="text" name="nhp"></td>
            </tr>
            <td></td>

            <tr>
                <td>Alamat</td>
                <td><textarea type="text" name="alamat" id="" rows="5"></textarea></td>
                <td>Kode pos</td>
                <td><input type="text" name="kodepos" minlenght="5"></td>
                <td>Foto profil</td>
                <td><input type="file" name="pp" accept="image/*" required></td>
            </tr>
            <td></td>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
                <td>Password 1</td>
                <td><input type="text" name="pw1"></td>
                <td>Password 2</td>
                <td><input type="text" name="pw2"></td>
            </tr>
            <td></td>

            <tr>
                <td><a href="welcome.php" class="kembalibtn">Kembali</a></td>
                <td><input type="submit" name="submitregis" value="Register" class="regisbtn"></td>
            </tr>

        </table>

    </form>
    </div>

    <script>
        function validasiRG(){
            if(document.formregis.depan.value==""){
                alert("nama depan tidak boleh kosong");
                document.formregis.depan.value.focus();
                return false;
            }
            if(document.formregis.tengah.value==""){
                alert("nama tengah tidak boleh kosong");
                document.formregis.tengah.value.focus();
                return false;
            }
            if(document.formregis.belakang.value==""){
                alert("nama belakang tidak boleh kosong");
                document.formregis.belakang.value.focus();
                return false;
            }

            if(document.formregis.tempat.value==""){
                alert("tempat tinggal tidak boleh kosong");
                document.formregis.tempat.value.focus();
                return false;
            }
            if(document.formregis.tanggal.value==""){
                alert("tanggal lahir tidak boleh kosong");
                document.formregis.tanggal.value.focus();
                return false;
            }
            if(document.formregis.nik.value==""){
                alert("NIK tidak boleh kosong");
                document.formregis.nik.value.focus();
                return false;
            }

            if(document.formregis.WN.value==""){
                alert("warga negara tidak boleh kosong");
                document.formregis.WN.value.focus();
                return false;
            }
            if(document.formregis.email.value==""){
                alert("email tidak boleh kosong");
                document.formregis.email.value.focus();
                return false;
            }
            if(document.formregis.email.value.endswith(".com")!=true){
                alert("email TIDAK VALID");
                document.formregis.email.value.focus();
                return false;
            }
            if(document.formregis.nhp.value==""){
                alert("No HP tidak boleh kosong");
                document.formregis.nhp.value.focus();
                return false;
            }
            if(isNan(document.formregis.nhp.value)){
                alert("No Hp TIDAK VALID");
                document.formregis.nhp.value.focus();
                return false;
            }
            if(document.formregis.alamat.value==""){
                alert("alamat tidak boleh kosong");
                document.formregis.alamat.value.focus();
                return false;
            }
            if(document.formregis.kodepos.value==""){
                alert("kodepos tidak boleh kosong");
                document.formregis.kodepos.value.focus();
                return false;
            }
            if(document.formregis.pp.value==""){
                alert("PP tidak boleh kosong");
                document.formregis.pp.value.focus();
                return false;
            }
            if(document.formregis.username.value == ""){
                alert("username tidak boleh kosong");
                document.formregis.username.focus();
                return false;
            }
            if(document.formregis.pw1.value == ""){
                alert("password1 tidak boleh kosong");
                document.formregis.pw1.focus();
                return false;
            }
            if(document.formregis.pw2.value == ""){
                alert("password2 tidak boleh kosong");
                document.formregis.pw2.focus();
                return false;
            }
            if(document.formregis.pw2.value != document.formregis.pw1.value){
                alert("password 1 dan 2 HARUS SAMA");
                return false;
            }
        }

    </script>
    
</body>
</html>