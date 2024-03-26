<?php

include "../config/config.php";

$user_id = $_POST['user_id'];
$buku_id = $_POST['buku_id'];
// Query SQL untuk menyimpan data peminjaman
mysqli_query($conn, "INSERT INTO koleksipribadi (user_id, buku_id) VALUES ('$user_id', '$buku_id')"); 

header("Location: koleksi.php?pesan=simpan");

?>
