

<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../config/config.php";
if (isset($_GET['kategori_buku_id'])) {
    $kategori_buku_id = ($_GET["kategori_buku_id"]);
    $query = "SELECT * FROM kategoribuku_relasi WHERE kategori_buku_id='$kategori_buku_id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data Kategori tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM kategoribuku_relasi
INNER JOIN buku ON kategoribuku_relasi.buku_id = buku.buku_id
INNER JOIN kategoribuku ON kategoribuku_relasi.kategori_id = kategoribuku.kategori_id WHERE 
kategori_buku_id='$kategori_buku_id'
";
$query = mysqli_query($conn, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-warning rounded h-100 p-4">
                    <h6 class="mb-4">EDIT KATEGORI BUKU RELASI</h6>
                    <form method="POST" action="proses_update_koleksi.php">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">KATEGORI BUKU ID</label>
                            <div class="col-sm-10">
                                <input name="kategori_buku_id" type="text" class="form-control" value="<?php echo $d_koleksi['kategori_buku_id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="from-group">
					<label>Pilih Buku</label>
					<select class="from-control mt-2" name="buku_id">
						<option><?php echo $d_koleksi['judul'] ?></option>
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
						<option><?php echo $d_koleksi['nama_kategori'] ?></option>
						<?php
						include"../config/config.php";
						$data = mysqli_query($conn,"select * from kategoribuku");
						while($d_kategori = mysqli_fetch_array($data)){ ?>
							<option value="<?php echo $d_kategori["kategori_id"]; ?>">
							<?php echo $d_kategori['nama_kategori']; ?></option>
						<?php } ?>
					</select>
				</div>
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

								<?php
								}
								?>