<?php

include "../config/config.php";

$user_id = $_POST['user_id'];
$buku_id = $_POST['buku_id'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$status_peminjaman = $_POST['status_peminjaman'];

// Query SQL untuk menyimpan data peminjaman
mysqli_query($conn, "INSERT INTO peminjaman (user_id, buku_id, tanggal_peminjaman, tanggal_pengembalian, status_peminjaman) VALUES ('$user_id', '$buku_id', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_peminjaman')"); 

header("Location: pinjam.php?pesan=simpan");

?>
