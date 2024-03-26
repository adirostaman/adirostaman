<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<from method="post" action="proses_simpan_kolesksi.php">
				<div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="buku">
						<option>Silahkan Pilih</option>
						<?php
						include './config/config.php';
						$data = mysql_query($conn,"select * from buku");
						while($d_buku = mysql_fetch_array($data)){ ?>
							<option value="<?php echo $d_buku['buku']; ?>">
							<?php echo $d_buku['judul']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-gruop">
					<label>Pilih Kategori</label>
					<select class="from-control mt-2" name="kategori_buku_id">
						<option>Silahkan Pilih</option>
						<?php
						include './config/config.php';
						$data = mysql_query($conn,"select * from kategori");
						while($d_buku = mysql_fetch_array($data)){ ?>
							<option value="<?php echo $['kategori_id']; ?>">
							<?php echo $d_kategoribuku['nama_kategori']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="from-gruop">
					<button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
				</div>
			</from>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>