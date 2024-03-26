<?php
//conn database
require_once "../config/config.php";

$user_id = $_GET["user_id"];
//mengambil buku_id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM user WHERE user_id='$user_id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      header("location:pengguna.php?pesan=hapus");
    }

?>