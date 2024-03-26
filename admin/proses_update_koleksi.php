<?php

include '../config/config.php';

$kategori_buku_id = $_POST['kategori_buku_id'];
$buku_id = $_POST['buku_id'];
$kategori_id = $_POST['kategori_id'];


mysqli_query($conn, "UPDATE kategoribuku_relasi SET buku_id='$buku_id',kategori_id='$kategori_id' WHERE kategori_buku_id='$kategori_buku_id'");

header("location:koleksi.php?pesan=update");

?>