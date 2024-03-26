<?php

include "../config/config.php";

$user_id = $_POST['user_id'];
$buku_id = $_POST['buku_id'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];


// Query SQL untuk menyimpan data peminjaman
mysqli_query($conn, "INSERT INTO ulasanbuku (user_id, buku_id, ulasan, rating) VALUES ('$user_id', '$buku_id', '$ulasan', '$rating')"); 

header("Location: ulasan.php?pesan=simpan");

?>
