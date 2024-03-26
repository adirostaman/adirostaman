<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../config/config.php";
if (isset($_GET['peminjaman_id'])) {
    $peminjaman_id = ($_GET["peminjaman_id"]);
    $query = "SELECT * FROM peminjaman WHERE peminjaman_id='$peminjaman_id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data Peminjam tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM peminjaman
INNER JOIN user ON peminjaman.user_id = user.user_id
INNER JOIN buku ON peminjaman.buku_id = buku.buku_id WHERE 
peminjaman_id='$peminjaman_id'
";
$query = mysqli_query($conn, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
    <div class="row g-4">
        <div class="col">
            <div class="bg-primary rounded h-100 p-4">
                <h6 class="mb-4">EDIT PEMINJAMAN</h6>
                <form method="POST" action="proses_update_peminjam.php">
                    <!-- Input tersembunyi untuk user_id dan buku_id -->
                    <input type="hidden" name="user_id" value="<?php echo $d_koleksi['user_id']; ?>">
                    <input type="hidden" name="buku_id" value="<?php echo $d_koleksi['buku_id']; ?>">
                    
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">PEMINJAM ID</label>
                        <div class="col-sm-10">
                            <input name="peminjaman_id" type="text" class="form-control" value="<?php echo $d_koleksi['peminjaman_id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">USER ID</label>
                        <div class="col-sm-10">
                            <input name="username" type="text" class="form-control" value="<?php echo $d_koleksi['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">BUKU ID</label>
                        <div class="col-sm-10">
                            <input name="judul" type="text" class="form-control" value="<?php echo $d_koleksi['judul']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">tanggal peminjaman</label>
                        <div class="col-sm-10">
                            <input name="tanggal_peminjaman" type="text" class="form-control" value="<?php echo $d_koleksi['tanggal_peminjaman']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">TanggalPengembalian</label>
                        <div class="col-sm-10">
                            <input name="tanggal_pengembalian" type="text" class="form-control" value="<?php echo $d_koleksi['tanggal_pengembalian']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="status_peminjaman" id="">
                            <option value="Dipinjam" <?php echo ($d_koleksi['status_peminjaman'] == 'Dipinjam') ? 'selected' : ''; ?>>Dipinjam</option>
                            <option value="Dikembalikan" <?php echo ($d_koleksi['status_peminjaman'] == 'Dikembalikan') ? 'selected' : ''; ?>>Dikembalikan</option>
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