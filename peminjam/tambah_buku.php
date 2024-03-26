<?php
include 'header.php';
include 'navbar.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <form action="proses_pinjam.php" method="post">
                <div class="form-group">
                    <label>Pilih user</label>
                    <select class="form-control mt-2" name="user_id" disabled>
                        <?php
                        include "../config/config.php";

                        // Mendapatkan user_id dari user yang sedang login
                        $loggedInusername = $_SESSION['username'];
                        $query = "SELECT * FROM user WHERE username = '$loggedInusername'";
                        $result = mysqli_query($conn, $query);

                        // Jika user ditemukan
                        if ($result && mysqli_num_rows($result) > 0) {
                            $d_user = mysqli_fetch_array($result);
                            echo '<option value="' . $d_user['user_id'] . '">' . $d_user['username'] . '</option>';
                        }
                        ?>
                    </select>
                    <input type="hidden" name="user_id" value="<?php echo $d_user['user_id']; ?>">
                </div>
                <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select class="form-control mt-2" name="buku_id">
                        <option>Silahkan Pilih</option>
                        <?php
                        $data = mysqli_query($conn, "SELECT * FROM buku");
                        while ($d_buku = mysqli_fetch_array($data)) {
                            echo '<option value="' . $d_buku['buku_id'] . '">' . $d_buku['judul'] . '</option>';
                        }
                        ?>
                    </select>
                    
                </div>
                <div class="form-floating mt-3 mb-3">
                    <input type="date" class="form-control" id="floatingInput" name="tanggal_peminjaman">
                    <label for="floatingInput">Tanggal Peminjaman</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" name="tanggal_pengembalian">
                    <label for="floatingInput">Tanggal Pengembalian</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="status_peminjaman" id="">
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
