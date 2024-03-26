<?php
include './config/config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lenkap = $_POST['nama_lenkap'];
$alamat = $_POST['alamat'];
mysqli_query($conn, "insert into user values('','$username','$password','$email','$nama_lenkap','$alamat','3')");
header("location:index.php ?pesan=info_daftar");
?>