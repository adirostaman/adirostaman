<?php
include 'header.php';
include 'navbar.php';

require_once "../config/config.php";
if (isset($_GET['user_id'])) {
    $user_id = ($_GET["user_id"]);
    $query = "SELECT * FROM user WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data tbuku_idak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-success rounded h-100 p-4">
                    <h6 class="mb-4">Edit User</h6>
                    <form method="POST" action="proses_update_pengguna.php">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">USER ID</label>
                            <div class="col-sm-10">
                                <input name="user_id" type="text" class="form-control" value="<?php echo $d['user_id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">USERNAME</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" class="form-control" required="" value="<?php echo $d['username']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">PASSWORD</label>
                            <div class="col-sm-10">
                                <input name="password" type="text" class="form-control" required="" value="<?php echo $d['password']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">EMAIL</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" required="" value="<?php echo $d['email']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">NAMA LENGKAP</label>
                            <div class="col-sm-10">
                                <input name="nama_lengkap" type="text" class="form-control" required="" value="<?php echo $d['nama_lengkap']; ?>">
                            </div>
                        </div>
                     
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input name="alamat" type="text" class="form-control" required="" value="<?php echo $d['alamat']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                                <input name="level" type="text" class="form-control" required="" value="<?php echo $d['level']; ?>">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>