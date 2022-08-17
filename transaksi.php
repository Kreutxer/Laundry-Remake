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
                    <div class="box-title"><p id="title">Tabel Transaksi</p></div>
                    <br>
                    <div class="wrapper" id="second">
                        <div class="wrap-content" id="table-a">
                            <div class="aaaa">
                                <div class="inp-box-search">
                                    <form action="transaksi.php" name="GET">
                                        <input type="text" name="cari" id="search-box">
                                        <input type="submit" value="Cari" id="submit-search">
                                    </form>
                                <?php 
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                    }
                                ?>
                                <div class="bbb">
                                    <a href="form-addTrx.php" class="add-pelanggan">+ Transaksi</a>
                                    <!-- <div class="add-pelanggan"><a href="" id="add-pel"></a></div> -->
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="table-a">
                                <table>
                                    <tr>
                                        <th id="id_pelanggan">ID Transaksi</th>
                                        <th id="nama_pelanggan">ID Pelanggan</th>
                                        <th id="nomor_telepon">ID Laundry</th>
                                        <th id="nomor_telepon">ID Petugas</th>
                                        <th id="nomor_telepon">Tanggal</th>
                                        <th id="action">Aksi</th>
                                    </tr>
                                    <?php
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $data = mysqli_query($db, "SELECT * FROM transaksi WHERE id_pelanggan LIKE '%".$cari."%' ");
                                        } else{
                                            $data = mysqli_query($db, "SELECT * FROM transaksi ORDER BY id_transaksi ASC");
                                        }
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                                <td><?php echo $d['id_transaksi']?></td>
                                                <td><?php echo $d['id_pelanggan']?></td>
                                                <td><?php echo $d['id_laundry']?></td>
                                                <td><?php echo $d['id_petugas']?></td>
                                                <td><?php echo $d['tanggal']?></td>
                                                <td>
                                                    <a href="action-hpsLndry.php?id_laundry=<?php echo $d['id_laundry']?>">hapus</a>
                                                    <a href="form-editLndry.php?id_laundry=<?php echo $d['id_laundry']?>">edit</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>