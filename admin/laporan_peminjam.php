<?php
include'header.php';
?>
<div class="card flex-md-row align-items-center  p-2 px-md-4 mb-3 border-bottom shadow-sm bg-white">
		<a href="index.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="" class="bi bi-book" viewBox="0 0 16 16">
 		 <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
		</svg>
		</a>
		<div class="card-body p-1 text-end">
		<a href="index.php" class="p-1 text-dark btn">Dashboard</a>
		<a href="kategori.php" class="p-1 text-dark btn">Kategori Buku</a>
		<a href="buku.php" class="p-1 text-dark btn">Buku</a>
		<a href="koleksi.php" class="p-1 text-dark btn">Koleksi</a>
		<a href="pengguna.php" class="p-1 text-dark btn">Pengguna</a>
		<a href="peminjam.php" class="p-1 text-dark btn">Peminjaman</a>
		<a href="laporan_peminjaman.php" class="p-1 text-dark btn">Laporan</a>
		<a href="../logout.php" class="p-1 text-dark btn">Logout</a>
		<a href="print.php" target="_blank">
			<button class="btn btn-primary">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  			<path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  			<path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
			</svg>
			</button>
			</a>
	</div>
</div>
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
										<td><?php echo $row['status_peminjaman']; ?></td>
									
									</tr>
						<?php } ?>
					</tbody>
	</table>
</div>
	<?php
	include 'footer.php';
	?>