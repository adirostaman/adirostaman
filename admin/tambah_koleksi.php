<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<form action="proses_simpan_koleksi.php" method="post">
				<div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="buku_id">
						<option>Silahkan Pilih</option>
						<?php
						include "../config/config.php";
						$data = mysqli_query($conn,"select * from buku");
						while($d_buku = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_buku['buku_id']; ?>">
							<?php echo $d_buku['judul']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-gruop">
					<label>Pilih Kategori</label>
					<select class="from-control mt-2" name="kategori_id">
						<option>Silahkan Pilih</option>
						<?php
						include"../config/config.php";
						$data = mysqli_query($conn,"select * from kategoribuku");
						while($d_kategori = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategori["kategori_id"]; ?>">
							<?php echo $d_kategori['nama_kategori']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-gruop">
					<button type="submit" name="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
