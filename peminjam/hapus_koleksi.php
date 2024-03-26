<?php 

include "../config/config.php";

$koleksi_id = $_GET['koleksi_id'];

mysqli_query($conn, "DELETE FROM koleksipribadi WHERE koleksi_id='$koleksi_id'");

header("Location:koleksi.php?pesan=hapus")

?>