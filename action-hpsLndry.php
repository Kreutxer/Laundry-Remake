<?php 
include "connection.php";
$id_laundry = $_GET['id_laundry'];
mysqli_query($db,"DELETE FROM laundry WHERE id_laundry='$id_laundry'");

header("location:laundry.php");
?>