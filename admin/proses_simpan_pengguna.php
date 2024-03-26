<?php
// koneksi database
include '../config/config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($conn, "insert into user values('','$username','$password','$email','$nama_lengkap','$alamat','$level')");

// level 3 untuk peminjam buku


header("location:index.php ?pesan=info_daftar")
?>