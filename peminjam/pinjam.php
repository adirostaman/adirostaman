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
                    echo "<div class='alert alert-success'>Data berhasil disimpan !</div>";
                }
                if ($_GET['pesan'] == "update") {
                    echo "<div class='alert alert-success'>Data berhasildi update !</div>";
                }
                if ($_GET['pesan'] == "hapus") {
                    echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
                }
            }
            ?>
            <a href="tambah_buku.php" class="btn btn-primary btn-sm mt-2">Tambah Peminjam</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Judul</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../config/config.php";
                    $no = 1;
                    $loggedInUsername = $_SESSION['username'];

                    $sql = "SELECT * FROM peminjaman
                            INNER JOIN user ON peminjaman.user_id = user.user_id
                            INNER JOIN buku ON peminjaman.buku_id = buku.buku_id
                            WHERE user.username = '$loggedInUsername' ";
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
							<?php
							if($row['status_peminjaman'] != 'Dikembalikan'){
							?>
                                <a href="edit_pinjam.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
                                <a href="Hapus_pinjam.php?peminjaman_id=<?php echo $row["peminjaman_id"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
							<?php
							}
							?>
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
