<?php 

include "../config/config.php";

$peminjaman_id = $_POST['peminjaman_id'];
$user_id = $_POST['user_id'];
$buku_id = $_POST['buku_id'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

mysqli_query($conn, "UPDATE peminjaman SET user_id='$user_id',
buku_id='$buku_id', tanggal_peminjaman='$tanggal_peminjaman', 
tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman'
WHERE peminjaman_id='$peminjaman_id'");


header("Location:peminjam.php");

?>