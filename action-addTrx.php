<?php 

include 'connection.php';

if(isset($_POST['id_pelanggan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_laundry   = $_POST['id_laundry'];
    $id_petugas   = $_POST['id_petugas'];
    $tanggal      = $_POST['tanggal'];

    $query = mysqli_query($db, "SELECT id_pelanggan FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");

    if($query->num_rows > 0){
        $set = mysqli_query($db, "INSERT INTO transaksi VALUES('','$id_pelanggan', '$id_laundry', '$id_petugas', '$tanggal')");
        if($set) {
            echo "<script> alert('Data Berhasil Disimpan')</script>";
            echo "<meta http-equiv=refresh content=0;URL='transaksi.php'>";
        }else{
            echo "<script> alert('Data Gagal Disimpan')</script>";
            echo "<meta http-equiv=refresh content=0;URL='form-addTrx.php'>";
        }
    } else {
        echo "<script> alert('ID Pelanggan tidak ditemukan')</script>";
        echo "<meta http-equiv=refresh content=0;URL='form-addTrx.php'>";
    }
}

?>