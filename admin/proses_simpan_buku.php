<?php
//koneksi database
include '../config/config.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];


//menginput data ke database
mysqli_query($conn,"INSERT INTO buku VALUES('','$judul','$penulis','$penerbit','$tahun_terbit')");

//mengalihkan halaman kembali ke index.php
header('location:buku.php')

?>