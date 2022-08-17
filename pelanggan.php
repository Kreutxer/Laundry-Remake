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
                    <div class="box-title"><p id="title">Tabel Pelanggan</p></div>
                    <br>
                    <div class="wrapper" id="second">
                        <div class="wrap-content" id="table-a">
                            <div class="aaaa">
                                <div class="inp-box-search">
                                    <form action="pelanggan.php" name="GET">
                                        <input type="text" name="cari" id="search-box">
                                        <input type="submit" value="Cari" id="submit-search">
                                    </form>
                                <?php 
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                    }
                                ?>
                                <div class="bbb">
                                    <a href="form-addPel.php" class="add-pelanggan">+ Pelanggan</a>
                                    <!-- <div class="add-pelanggan"><a href="" id="add-pel"></a></div> -->
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="table-a">
                                <table>
                                    <tr>
                                        <th id="id_pelanggan">ID Pelanggan</th>
                                        <th id="nama_pelanggan">Nama</th>
                                        <th id="nomor_telepon">No Telp</th>
                                        <th id="alamat">Alamat</th>
                                        <th id="action">Aksi</th>
                                    </tr>
                                    <?php
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $data = mysqli_query($db, "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%".$cari."%' ORDER BY nama_pelanggan ASC");
                                        } else{
                                            $data = mysqli_query($db, "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC");
                                        }
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <tr>
                                                <td><?php echo $d['id_pelanggan']?></td>
                                                <td><?php echo $d['nama_pelanggan']?></td>
                                                <td><?php echo $d['no_telp']?></td>
                                                <td><?php echo $d['alamat']?></td>
                                                <td>
                                                    <a href="action-hpsPel.php?id_pelanggan=<?php echo $d['id_pelanggan']?>">hapus</a>
                                                    <a href="form-editPel.php?id_pelanggan=<?php echo $d['id_pelanggan']?>">edit</a>
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