<?php 
 
include 'connection.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan=$_POST['namaPel'];  
$no_telp=$_POST['noTelp'];
$alamat=$_POST['Alamat'];
 
$set = mysqli_query($db,"UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp' WHERE id_pelanggan='$id_pelanggan'");

if($set) {
    echo "<script> alert('Data Berhasil Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='pelanggan.php'>";
}else{
    echo "<script> alert('Data Gagal Disimpan')</script>";
    echo "<meta http-equiv=refresh content=0;URL='form-addPel.php'>";
}

// header("location:pelanggan.php?pesan=update");
 
?>