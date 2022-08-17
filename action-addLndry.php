<?php
include 'connection.php';

$harga=$_POST['harga'];
$jenis_laundry=$_POST['jenis_laundry'];

$set = mysqli_query($db, "INSERT INTO laundry VALUES('','$harga', '$jenis_laundry')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='laundry.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='form-addLndry.php'>";
}

?>