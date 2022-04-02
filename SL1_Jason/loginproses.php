<?php
    session_start();
    include("config.php");

    if(isset($_POST['submitlogin'])){
        //cek kondisi
        if($_POST['LUN'] != NULL && $_POST['LPW'] != NULL){
            $strquery_select = "SELECT * FROM account WHERE username = '".$_POST['LUN']."'";
            $query_select = mysqli_query($connection, $strquery_select);
            $data = mysqli_fetch_array($query_select);

            if($data){
                if($data['username'] == $_POST['LUN'] && $data['pw1'] == $_POST['LPW']){
                    $_SESSION['Sesusername'] = $data['username'];
                    echo '<script>
                    alert("Log In Success");
                    document.location.href="home.php"
                    </script>';
                   
                }
                else{
                    echo '<script>
                    alert("Log In FAILED")
                    document.location.href="login.php"
                    </script>';
                }
            }
            

        }
        else{
            echo "ERROR LOGIN Username or Password is EMPTY";
            header("location:login.php");
        }
    }




?>