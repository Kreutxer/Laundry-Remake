<?php

include "session.php";
include "connection.php";

//tabel laundry
$laundry = mysqli_query($db, "SELECT * FROM laundry");
$jumlah_laundry = mysqli_num_rows($laundry);

//tabel pelanggan
$pelanggan = mysqli_query($db, "SELECT * FROM pelanggan");
$jumlah_pelanggan = mysqli_num_rows($pelanggan);

//tabel pembayaran
$pembayaran = mysqli_query($db, "SELECT * FROM transaksi");
$jumlah_pembayaran = mysqli_num_rows($pembayaran);

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
                    <div class="box-title"><p id="title">Dashboard</p></div>
                    <br>
                    <div class="box-content">
                        <div class="wrapper">
                            <div class="wrap-content">
                                <div class="q">Pelanggan</div>
                                <div class="b"><?php echo $jumlah_pelanggan; ?></div>
                            </div>
                            <div class="wrap-content">
                                <div class="q">Laundry</div>
                                <div class="b"><?php echo $jumlah_laundry; ?></div>
                            </div>
                            <div class="wrap-content">
                                <div class="q">Transaksi</div>
                                <div class="b"><?php echo $jumlah_pembayaran; ?></div>
                            </div>
                        </div>
                        <br>
                        <div class="wrapper" id="second">
                            <div class="wrap-content" id="table"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>