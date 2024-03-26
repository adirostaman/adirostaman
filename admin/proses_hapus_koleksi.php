<?php
include "../config/config.php";

$kategori_buku_id = $_GET['kategori_buku_id'];
mysqli_query($conn, "DELETE FROM kategoribuku_relasi WHERE kategori_buku_id='$kategori_buku_id' ");

header("Location:koleksi.php?pesan=hapus");
?>