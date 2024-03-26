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
            <a href="tambah_ulasan.php" class="btn btn-primary btn-sm mt-2">Tambah Ulasan</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Judul</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "../config/config.php";
                    $no = 1;
                    $loggedInUsername = $_SESSION['username'];

                    $sql = "SELECT * FROM ulasanbuku
                            INNER JOIN user ON ulasanbuku.user_id = user.user_id
                            INNER JOIN buku ON ulasanbuku.buku_id = buku.buku_id
                            WHERE user.username = '$loggedInUsername' ";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['ulasan']; ?></td>
                            <td><?php echo $row['rating']; ?></td>
                            <td>
                                <a href="Hapus_ulasan.php?ulasan_id=<?php echo $row["ulasan_id"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
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
