<?php
include 'connection.php';

$nama_pelanggan=$_POST['namaPel'];
$no_telp=$_POST['noTelp'];
$alamat=$_POST['Alamat'];

$set = mysqli_query($db, "INSERT INTO pelanggan VALUES('','$nama_pelanggan', '$no_telp', '$alamat')");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='pelanggan.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='form-addPel.php'>";
}

?>