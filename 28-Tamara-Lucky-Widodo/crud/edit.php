<?php

session_start();
include "../db_conn.php";
error_reporting(0);

$id = $_GET['id'];

$get = mysqli_query($conn, "SELECT * FROM tsiswa_nourut WHERE id='$id'");
$data = mysqli_fetch_object($get);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Add Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <?php

        if (isset($_POST['add'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $nilai_harian = $_POST['nilai_harian'];
            $nilai_mid_test = $_POST['nilai_mid_test'];
            $nilai_final_test = $_POST['nilai_final_test'];

            $insert = mysqli_query($conn, "UPDATE tsiswa_nourut SET nim='$nim',nama='$nama',alamat='$alamat',nilai_harian='$nilai_harian',nilai_mid_test='$nilai_mid_test',nilai_final_test='$nilai_final_test' WHERE id='$id'");

            if ($insert) {
                echo "<div class='alert alert-success'>Siswa berhasil diedit</div>";
            } else {
                echo "<div class='alert alert-danger'>Siswa gagal diedit</div>";
            }
        }

        ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="nim">NIM</label>
                <input type="text" name="nim" required class="form-control" value="<?= $data->nim ?>" placeholder="XXXXX">
            </div>
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" required class="form-control" value="<?= $data->nama ?>" placeholder="Max 20 char">
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" required class="form-control" value="<?= $data->alamat ?>" placeholder="Max 30 char">
            </div>
            <div class="mb-3">
                <label for="nilai_harian">Nilai Harian</label>
                <input type="number" name="nilai_harian" required class="form-control" value="<?= $data->nilai_harian ?>" placeholder="Nilai antara 0 s.d 100">
            </div>
            <div class="mb-3">
                <label for="nilai_mid_test">Nilai MID TEST</label>
                <input type="number" name="nilai_mid_test" required class="form-control" value="<?= $data->nilai_mid_test ?>" placeholder="Nilai antara 0 s.d 100">
            </div>
            <div class="mb-3">
                <label for="nilai_final_test">Nilai FINAL TEST</label>
                <input type="number" name="nilai_final_test" required class="form-control" value="<?= $data->nilai_final_test ?>" placeholder="Nilai antara 0 s.d 100">
            </div>
            <div class="mb-3">
                <input type="submit" value="PROCESS" name="add" class="btn btn-primary">
                <a href="#" onclick="window.history.back()" class="btn btn-dark">BACK</a>
            </div>
        </form>
    </div>
</body>

</html>