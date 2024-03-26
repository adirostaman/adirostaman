<?php
include 'header.php';
include 'navbar.php';

require_once "../config/config.php";
if (isset($_GET['kategori_id'])) {
    $kategori_id = ($_GET["kategori_id"]);
    $query = "SELECT * FROM Kategoribuku WHERE kategori_id='$kategori_id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data tkategori_idak ditemukan pada database');window.location='index.php';</script>";
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-success rounded h-100 p-4">
                    <h6 class="mb-4">Edit Kategori</h6>
                    <form action="proses_update_kategori.php" method="post">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">KATEGORI ID</label>
                            <div class="col-sm-10">
                                <input name="kategori_id" type="text" class="form-control" value="<?php echo $d['kategori_id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">NAMA KATEGORI</label>
                            <div class="col-sm-10">
                                <input name="nama_kategori" type="text" class="form-control" required="" value="<?php echo $d['nama_kategori']; ?>">
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