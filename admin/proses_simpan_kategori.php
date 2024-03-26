<?php
include '../config/config.php';
$nama_kategori = $_POST['nama_kategori'];
mysqli_query($conn, "insert into kategoribuku values('','$nama_kategori')");
header("location:kategori.php");
?>