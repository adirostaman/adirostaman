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
						<th>Nama Buku</th>
						<th>Kategori Buku</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                <?php
								
								require_once "../config/config.php";
							$no=1;
							$sql="SELECT * FROM kategoribuku_relasi
							INNER JOIN buku ON kategoribuku_relasi.buku_id = buku.buku_id
							INNER JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.kategori_id";
									$query = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_array($query)) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['judul']; ?></td>
										<td><?php echo $row['nama_kategori']; ?></td>
										<td>
											<a href="edit_koleksi.php?kategori_buku_id=<?php echo $row["kategori_buku_id"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
											<a href="proses_hapus_koleksi.php?kategori_buku_id=<?php echo $row["kategori_buku_id"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
										</td>
									</tr>

								<?php
								}
								?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>