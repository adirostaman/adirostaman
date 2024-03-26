<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt 3">
    <div class ="card">
        <div class="card-body">
            <form method="post" action="proses_simpan_buku.php">
            <div class="form-group">
                <label>judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label>penulis</label>
                <input type="text" class="form-control" name="penulis">
            </div>
            <div class="form-group">
                <label>penerbit</label>
                <input type="text" class="form-control" name="penerbit">
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit">
            </div>
            <div class="form-group">
                <button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
            </div>
            </form>
        </div>

    </div>

</div>
<?php
include 'footer.php';