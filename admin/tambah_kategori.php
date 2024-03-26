<?php
include "header.php";
include "navbar.php";
?>
<div class="content mt-3">
<div class="card-body">
            <form method="post" action="proses_simpan_kategori.php">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori">
            </div>
            <div class="form-group">
                <button type="submit" class="from-control btn btn-primary btn-sm mt-3">Simpan</button>
            </div>
            </from>

        </div>

    </div>

</div>
<?php
include 'footer.php';
?>