<?php 
include "connection.php";
$id_transaksi = $_GET['id_transaksi'];
mysqli_query($db,"DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");

header("location:transaksi.php");
?>