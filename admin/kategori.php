<?php
include "header.php";
include "navbar.php";
?>
<div class ="content mt-3">
    <div class ="card">
		<div class="card-body">
            <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="simpan"){
                                    echo "<div class='alert alert-danger'> Data Berhasil disimpan !</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="update"){
                                    echo "<div class='alert alert-info'> Data berhasil update !</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="hapus"){
                                    echo "<div class='alert alert-success'> Data berhasil dihapus !</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="info_daftar"){
                                    echo "<div class='alert alert-success'>Anda Berhasil Daftar !</div>";
                                }
                            }
                            ?>
                            <a href="tambah_kategori.php" class="btn btn-primary btn-sm mt-2">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        include '../config/config.php';
                         $no = 1;
                        $data = mysqli_query($conn,"select * from kategoribuku");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama_kategori']; ?></td>
                            <td>
                            <a href="edit_kategori.php?kategori_id=<?php echo $d['kategori_id']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
								<a href="proses_hapus_kategori.php?kategori_id=<?php echo $d['kategori_id']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>