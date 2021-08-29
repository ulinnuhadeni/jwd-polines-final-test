<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <?php if ($_SESSION['role'] == 'admin') { ?>
                <!-- For Admin -->
                <section id="users">
                    <div class="container mt-5">

                        <h3 class="text-center" style="color:brown">REKAP DATA NILAI SISWA DTS KOMINFO – JWD 2021</h3>

                        <div class="my-3">
                            <a href="crud/add.php" class="btn btn-primary">+ Add New Siswa</a>
                        </div>
                        <table id="example" class="table table-bordered table-striped text-center table-hover ">
                            <thead class="table-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>N.HARIAN (N1)</th>
                                    <th>NILAI MID TEST(N2)</th>
                                    <th>NILAI FINAL TEST(N3)</th>
                                    <th>DENGAN HURUF</th>
                                    <th>PREDIKAT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $get = mysqli_query($conn, "SELECT * FROM tsiswa_nourut");
                                $no = 1;
                                while ($hasil = mysqli_fetch_object($get)) :
                                    $jumlah = mysqli_num_rows($get);
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $hasil->nim ?></td>
                                        <td><?= $hasil->nama ?></td>
                                        <td><?= $hasil->alamat ?></td>
                                        <td><?= $hasil->nilai_harian ?></td>
                                        <td><?= $hasil->nilai_mid_test ?></td>
                                        <td><?= $hasil->nilai_final_test ?></td>
                                        <td>
                                            <?php

                                            $total = $hasil->nilai_harian + $hasil->nilai_mid_test + $hasil->nilai_final_test;
                                            $rata = $total / 3;

                                            if ($rata < 60) {
                                                $predikat = "E";
                                                echo "E";
                                            } else if ($rata == 60 || $rata <= 69) {
                                                $predikat = "D";
                                                echo "D";
                                            } else if ($rata == 70 || $rata <= 79) {
                                                $predikat = "C";
                                                echo "C";
                                            } else if ($rata == 80 || $rata <= 89) {
                                                $predikat = "B";
                                                echo "B";
                                            } else {
                                                $predikat = "A";
                                                echo "A";
                                            };

                                            ?>
                                        </td>
                                        <td align="center">
                                            <?php

                                            if ($predikat == "A") {
                                                echo "MEMUASKAN";
                                            } else if ($predikat == "B") {
                                                echo "BAIK";
                                            } else if ($predikat == "C") {
                                                echo "CUKUP";
                                            } else if ($predikat == "D") {
                                                echo "KURANG";
                                            } else {
                                                echo "GAGAL";
                                            }

                                            ?>
                                        </td>
                                        <td align="center">
                                            <a href="crud/edit.php?id=<?= $hasil->id ?>" class="text-primary">Edit</a> | <a href="crud/delete.php?id=<?= $hasil->id ?>" class="text-danger">Delete</a>
                                        </td>
                                    </tr>

                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <strong>
                            <p>Jumlah siswa : <?= $jumlah ?></p>
                        </strong>
                    </div>
                </section>
                <div class="card" style="width: 18rem;">
                    <img src="img/admin-default.png" class="card-img-top" alt="admin image">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <?= $_SESSION['name'] ?>
                        </h5>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                <?php } else { ?>

                    <!-- FORE USERS -->
                    <div class="card" style="width: 18rem;">
                        <img src="img/user-default.png" class="card-img-top" alt="admin image">
                        <div class="card-body text-center">

                            <h5 class="card-title">
                                <?= $_SESSION['name'] ?>
                            </h5>
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
    </body>

    </html>
<?php } else {
    header("Location: index.php");
} ?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>