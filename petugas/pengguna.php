<?php
include 'header.php';
include 'navbar.php';
?>

<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
			<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="simpan"){
					echo "<div class='alert alert-success'>Data berhasil disimpan !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="update"){
					echo "<div class='alert alert-success'>Data berhasildi update !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="hapus"){
					echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
				}
			}
			?>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>USERNAME</th>
						<th>PASSWORD</th>
						<th>EMAIL</th>
						<th>NAMA LENGKAP</th>
						<th>ALAMAT</th>
						<th>LEVEL</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					 <?php 
					 include '../config/config.php';
					 $no = 1;
					 $data = mysqli_query($conn,"select * from user");
					 while($d = mysqli_fetch_array($data)){
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['username']; ?></td>
							<td><?php echo $d['password']; ?></td>
							<td><?php echo $d['email']; ?></td>
							<td><?php echo $d['nama_lengkap']; ?></td>
							<td><?php echo $d['alamat']; ?></td>
							<td><?php echo $d['level']; ?></td>
							<td>
								<a href="edit_pengguna.php?user_id=<?php echo $d['user_id']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
								<a href="proses_hapus_pengguna.php?user_id=<?php echo $d['user_id']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>