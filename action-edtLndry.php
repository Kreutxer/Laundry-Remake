<?php 
 
include 'connection.php';

$id_laundry = $_POST['id_laundry'];
$harga=$_POST['harga'];
$jenis_laundry=$_POST['jenis_laundry'];
 
$set = mysqli_query($db,"UPDATE laundry SET harga='$harga', jenis_laundry='$jenis_laundry' WHERE id_laundry='$id_laundry'");



if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='laundry.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='laundry.php'>";
}
 
?>