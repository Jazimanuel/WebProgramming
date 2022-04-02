<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form name="formlogin" onsubmit="return validasiLI();" action="loginproses.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="inputbox" name="LUN"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="inputbox" name="LPW"></td>
                </tr>
                <tr>
                    <td>
                        <div class="login1">
                        <input type="submit" name="submitlogin" value="Login" class="LoginBTN1">
                        <a href="welcome.php" class="LoginBTN2">Kembali</a>
                        </div>
                    </td>
                </tr>
                
            </table>
        </form>
    </div>

    <script>
        function validasiLI(){
            <?php
                if(isset($_SESSION['LUN'])==""){
                    alert("USERNAME OR PASSWORD NOT DEFINED");
                    return false;
                }
            ?>
            if(document.formlogin.LUN.value==""){
                alert("Username has to be filled!");
                document.formregis.LUN.focus();
                return false;
            }
            if(document.formlogin.LPW.value==""){
                alert("Password has to be filled!");
                document.formregis.LPW.focus();
                return false;
            }
        }
    </script>
</body>
</html>