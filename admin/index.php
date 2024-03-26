<?php
include "header.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<div class="content mt-3">
	<div class ="row">
	<?php
				include "../config/config.php";
				$data_buku = mysqli_query($conn, "SELECT * FROM buku");
				$tampil_buku = mysqli_num_rows($data_buku);
				?>
				<?php
				include "../config/config.php";
				$data_kategori = mysqli_query($conn, "SELECT * FROM kategoribuku");
				$tampil_kategori = mysqli_num_rows($data_kategori);
				?>
				<?php
				include "../config/config.php";
				$data_user = mysqli_query($conn, "SELECT * FROM user");
				$tampil_user = mysqli_num_rows($data_user);
				?>
				<?php
				include "../config/config.php";
				$data_peminjam = mysqli_query($conn, "SELECT * FROM peminjaman");
				$tampil_peminjam = mysqli_num_rows($data_peminjam);
				?>
		<div class ="col-sm-3">
			<div class ="card">
				<div class="card-body bg-warning text-center">
					<h3>Data Buku</h3>
					<h2><?php echo $tampil_buku ?></h2>
					<hr>
					<a href="buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
		<div class ="col-sm-3">
			<div class ="card">
				<div class="card-body bg-danger text-center">
					<h3>Kategori Buku</h3>
					<h2><?php echo $tampil_kategori ?></h2>
					<hr> 
					<a href="kategori.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
				<div class ="col-sm-3">
			<div class ="card">
				<div class="card-body bg-info text-center">
					<h3>Pengguna</h3>
					<h2><?php echo $tampil_user ?></h2>
					<hr> 
					<a href="pengguna.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
				<div class ="col-sm-3">
			<div class ="card">
				<div class="card-body bg-primary text-center">
					<h3>Peminjaman</h3>
					<h2><?php echo $tampil_peminjam ?></h2>
					<hr> 
					<a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Data</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class ="content mt-3">
	<div class ="card">
		<div class="card-body">
			<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
		</p>
	</div>
</div>
</div>
<?php
include 'footer.php';
?>