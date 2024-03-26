<?php
include'header.php';
?>
<!-- Navbar -->
<!-- tabel status -->
<h2 class="text-center sm mt-3"  ><b>Laporan Perpustakaan</b></h2>
<hr>
<!-- <table  class="table"> -->
<!-- <tr> -->
	<!-- <th> -->
<!-- <div class="content"> --> 
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Dari Tanggal</label> -->
			<!-- <input type="date" name="#"> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- <th> -->
<!-- <div class="content"> -->
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Ke Tanggal</label> -->
			<!-- <input type="date" name="#"> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- <th> -->
<!-- <div class="content"> -->
	<!-- <form method="post" action="#"> -->
		<!-- <div class="form-group"> -->
			<!-- <label>Status</label> -->
			<!-- <select> -->
				<!-- <option value="All">All</option> -->
                <!-- <option value="#">Peminjaman</option> -->
                <!-- <option value="#">Pengembalian</option> -->
			<!-- </select> -->
		<!-- </div> -->
	<!-- </form> -->
<!-- </div> -->
<!-- </th> -->
<!-- </tr> -->
<!-- </table> -->

<div style='overflow-y: scroll; height: 425px'>
	<a href="tambah_peminjam.php" class="btn-primary"></a>
    <table class="table">
        <thead class="bg-primary bg-gradient">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
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
										<td>
											<a href="edit_peminjaman.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
											<a href="proses_hapus_peminjaman.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
										</td>
									</tr>
						<?php } ?>
					</tbody>
	</table>
</div>
	<?php
	include 'footer.php';
	?>
	<script>
		window.print()
	</script>