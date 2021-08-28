<?php

session_start();
include "../db_conn.php";

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tsiswa_nourut WHERE id='$id'");
if ($delete) {
    echo "<div class='container mt-5'><div class='alert alert-success'>Siswa berhasil dihapus</div></div>";
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Siswa gagal dihapus</div></div>";
}
