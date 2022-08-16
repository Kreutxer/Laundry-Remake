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
                <a href="" id="li">Transaksi</a>
            </div>
        </div>
        <div class="right">
            <div class="right-nav">
                <div class="mt"></div>
                <div class="nav-cont">
                    <a href="" id="mail"></a>
                    <a href="" id="notif"></a>
                    <a href="" id="logout"></a>
                </div>
            </div>
            <div class="right-content">
                <div class="right-box">
                    <div class="box-title"><p id="title">Tabel Pelanggan</p></div>
                    <br>
                    <div class="wrapper" id="second">
                        <div class="wrap-content" id="table-a">
                            <div class="table-a">
                                <table>
                                    <tr>
                                        <th id="id_laundry">ID Laundry</th>
                                        <th id="id_pelanggan">ID Pelanggan</th>
                                        <th id="nama_pelanggan">Nama</th>
                                        <th id="nomor_telepon">No Telp</th>
                                        <th id="alamat">Alamat</th>
                                        <th id="action">Aksi</th>
                                    </tr>
                                    <?php
                                        $query=mysqli_query($db, 'SELECT * FROM pelanggan');
                                        while($data = mysqli_fetch_array($query)):
                                    ?>
                                    <tr>
                                        <td><?= $data['id_laundry']?></td>
                                        <td><?= $data['id_pelanggan']?></td>
                                        <td><?= $data['nama_pelanggan']?></td>
                                        <td><?= $data['no_telp']?></td>
                                        <td><?= $data['alamat']?></td>
                                        <td>
                                            <a href="">hapus</a>
                                            <a href="">edits</a>
                                        </td>
                                    </tr>
                                    <?php
                                        endwhile;
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