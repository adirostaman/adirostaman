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
						<th>Judul</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun Terbit</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					 <?php 
					include '../config/config.php';
					$no = 1;
					 $data = mysqli_query($conn,"select * from buku");
					 while($d = mysqli_fetch_array($data)){
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['judul'];?></td>
							<td><?php echo $d['penulis'];?></td>
							<td><?php echo $d['penerbit'];?></td>
							<td><?php echo $d['tahun_terbit'];?></td>
							<td>
								<a href="edit_buku.php?buku_id=<?php echo $d['buku_id']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
								<a href="proses_hapus_buku.php?buku_id=<?php echo $d['buku_id']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
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