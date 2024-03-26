<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "simpan") {
                    echo "<div class='alert alert-success'>Data berhasil dipinjam !</div>";
                }
                if ($_GET['pesan'] == "update") {
                    echo "<div class='alert alert-success'>Data berhasildi update !</div>";
                }
                if ($_GET['pesan'] == "hapus") {
                    echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
                }
            }
            ?>
            <a href="tambah_koleksi.php" class="btn btn-primary btn-sm mt-2">Tambah koleksi</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../config/config.php";
                    $no = 1;
                    $loggedInUsername = $_SESSION['username'];

                    $sql = "SELECT * FROM koleksipribadi
                            INNER JOIN user ON koleksipribadi.user_id = user.user_id
                            INNER JOIN buku ON koleksipribadi.buku_id = buku.buku_id
                            WHERE user.username = '$loggedInUsername' ";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>
                            <td><?php echo $row['judul']; ?></td>
							<td><a href="hapus_koleksi.php?koleksi_id=<?php echo $row["koleksi_id"]; ?>" class="btn btn-warning btn-sm mb-1">Hapus</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
