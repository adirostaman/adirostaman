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
					echo "<div class='alert alert-success'>Data berhasil ditambah !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="update"){
					echo "<div class='alert alert-success'>Data berhasil diupdate !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="hapus"){
					echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
				}
			}
			?>
			<a href="print.php" class="btn btn-success btn-sm mt-2"><i class="fa fa-file-pdf"></i>&nbsp Print</a>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Peminjam</th>
						<th>Judul Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Status peminjaman</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
								require_once "../config/config.php";
								$no = 1;
								$sql = "SELECT * FROM peminjaman
                                        INNER JOIN user ON peminjaman.user_id = user.user_id
                                        INNER JOIN buku ON peminjaman.buku_id = buku.buku_id
                                        ";
								$query = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
						<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['nama_lengkap']; ?></td>
										<td><?php echo $row['judul']; ?></td>
										<td><?php echo $row['tanggal_peminjaman']; ?></td>
										<td><?php echo $row['tanggal_pengembalian']; ?></td>
										<td><?php echo $row['status_peminjaman']; ?></td>
										<td>
											<a href="edit_peminjaman.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
											<a href="proses_hapus_peminjam.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
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