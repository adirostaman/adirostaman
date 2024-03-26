<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
    <div class ="card">
        <div class="card-body">
            <form method="post" action="proses_simpan_pengguna.php">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>nama lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                    <label>level</label>
                <div class="form-group">
                   <select name="level" id="level">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                   </select>
                </div>
                    <div class="form-group">
                    <button type="submit"class="form-control btn btn-primary btn-sm mt-3">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>