<?php 
include "connection.php";
$id_pelanggan = $_GET['id_pelanggan'];
mysqli_query($db,"DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");

header("location:pelanggan.php");
?>