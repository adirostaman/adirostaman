<?php
//koneksi database
include '../config/config.php';

//menangkap data yang dikirim dari from
$buku_id = $_POST['buku_id']; 
$kategori_id = $_POST['kategori_id'];


//menginput data ke database
mysqli_query($conn,"INSERT INTO kategoribuku_relasi values('','$buku_id','$kategori_id')");

//mengalihkan halaman kembali ke index.php
header("location:koleksi.php?pesan=simpan");

?>