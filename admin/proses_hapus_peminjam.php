<?php
include "../config/config.php";

$peminjaman_id = $_GET['peminjaman_id'];
mysqli_query($conn, "DELETE FROM peminjaman WHERE peminjaman_id='$peminjaman_id'");

header("location:peminjam.php?pesan=hapus");
?>