<?php

session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form action="" method="POST">
                <div class="login-title"><p>Login</p></div>
                    <div class="form-box">
                        <div class="form-input">
                            <div class="input-username">
                                <div class="label-username"><p>Username</p></div>
                                <div class="input">
                                    <input type="text" class="icon" value placeholder="" name="username">
                                </div>
                            </div>
                            <br>
                            <div class="input-password">
                                <div class="label-password"><p>Password</p></div>
                                <div class="input">
                                    <input type="password" class="icon-pw" value placeholder="" name="password">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="submit">
                                <button name="proseslog">LOGIN</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
            <?php
                if(isset($_POST['proseslog'])){
                    $sql = mysqli_query($db,"select * from user where username='$_POST[username]' and password = '$_POST[password]'");
                    $cek = mysqli_num_rows($sql);
                    $fek = mysqli_fetch_assoc($sql);
                    if($cek > 0 ){
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['nama'] = $fek['nama'];
                        echo "<meta http-equiv=refresh content=0;URL='index.php'>";
                    } else{
                        echo "<p align=center><b> username atau password salah!</b></p>";
                        echo "<meta http-equiv=refresh content=2;URL=login.php>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>