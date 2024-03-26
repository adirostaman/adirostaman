<?php 

include "../config/config.php";

$ulasan_id = $_GET['ulasan_id'];

mysqli_query($conn, "DELETE FROM ulasanbuku WHERE ulasan_id='$ulasan_id'");

header("Location:ulasan.php?pesan=hapus")

?>