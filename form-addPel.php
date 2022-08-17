<?php

include "session.php";
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
    <div class="i-container">
        <div class="left">
            <div class="logo">
                <p>UjangLaundry</p>
            </div>
            <div class="user">
                <div class="prof-pict"></div>
                <div class="adm-desc">
                    <div class="adm-name"><p><?php echo $_SESSION['nama'];?></p></div>
                    <div class="adm-stats"><p>Admin</p></div>
                </div>
            </div>
            <br>
            <div class="list">
                <a href="index.php" id="li" class="active">Dashboard</a>
            </div>
            <div class="list">
                <a href="pelanggan.php" id="li">Pelanggan</a>
            </div>
            <div class="list">
                <a href="laundry.php" id="li">Laundry</a>
            </div>
            <div class="list">
                <a href="transaksi.php" id="li">Transaksi</a>
            </div>
        </div>
        <div class="right">
            <div class="right-nav">
                <div class="mt"></div>
                <div class="nav-cont">
                    <a href="logout.php" id="logout"></a>
                </div>
            </div>
            <div class="right-content">
                <div class="right-box">
                    <div class="box-title"><p id="title">Tambah Pelanggan</p></div>
                    <br>
                    <div class="wrapper-add" id="second-add">
                        <div class="wrap-content" id="add-pel">
                            <form action="action-addPel.php" method="POST">
                                <div class="box">
                                    <label for="namaPel">Nama</label>
                                    <input type="text" name="namaPel" id="add">
                                </div>
                                <div class="box">
                                    <label for="noTelp">No. Telp</label>
                                    <input type="text" name="noTelp" id="add">
                                </div>
                                <div class="box">
                                    <label for="Alamat">Nama</label>
                                    <input type="text" name="Alamat" id="add">
                                </div>
                                <br>
                                    <div class="save">
                                        <input type="submit" name="simpan" value="Simpan" id="save">
                                        <input type="reset" name="reset" id="save">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>