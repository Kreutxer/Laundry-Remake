<?php

include "session.php";
include "connection.php";

$id_transaksi = $_GET['id_transaksi'];
$query_mysql = mysqli_query($db, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
$data = mysqli_fetch_array($query_mysql);

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
                    <div class="box-title"><p id="title">Edit Transaksi</p></div>
                    <br>
                    <div class="wrapper-add" id="second-add">
                        <div class="wrap-content" id="add-pel">
                            <form action="action-addTrx.php" method="POST">
                                <div class="box">
                                    <label for="namaPel">ID Pelanggan</label>
                                    <input type="text" name="id_pelanggan" id="add" value="<?php echo $data['id_pelanggan']?>">
                                </div>
                                <div class="box">
                                    <label for="noTelp">ID Laundry</label>
                                    <select name="id_laundry" id="add-sel" >
                                        <option value="Pilih">--Pilih ID Laundry--</option>
                                            <?php $k = mysqli_query($db, "SELECT * FROM laundry");  
                                                foreach ($k as $row) : 
                                            ?>

                                                <option value="<?php echo $row['id_laundry']?>"><?php echo $row['id_laundry']. " - " .$row['jenis_laundry']?></option>
                                            <?php
                                                endforeach;
                                            ?>
                                    </select>
                                </div>
                                <div class="box">
                                    <label for="Alamat">ID Petugas</label>
                                    <select name="id_petugas" id="add-sel" >
                                        <option value="Pilih">--Pilih ID Petugas--</option>
                                            <?php $k = mysqli_query($db, "SELECT * FROM petugas");  
                                                foreach ($k as $row) : 
                                            ?>

                                                <option value="<?php echo $row['id_petugas']?>"><?php echo $row['id_petugas']. " - " .$row['nama_petugas']?></option>
                                            <?php
                                                endforeach;
                                            ?>
                                    </select>
                                </div>
                                <div class="box">
                                    <label for="Alamat">Tanggal</label>
                                    <input type="date" name="tanggal" id="add">
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