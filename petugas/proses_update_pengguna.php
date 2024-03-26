<?php
//config database
include '../config/config.php';

//menangkap data yang dikirim dari from
$user_id=$_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

mysqli_query($conn, "UPDATE user SET username='$username',password='$password',email='$email',
nama_lengkap='$nama_lengkap',alamat='$alamat', level='$level' WHERE user_id='$user_id' ");

//mengalihkan halaman kembali
header("location:pengguna.php?pesan=update");

?>