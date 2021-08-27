<?php

if (isset($_POST['Update'])) {

    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $name = $_POST['nama_lengkap'];
    $address = $_POST['alamat'];
    $nilai_harian = $_POST['nilai_harian'];
    $nilai_mid_semester = $_POST['nilai_mid_semester'];
    $nilai_final_test = $_POST['nilai_final_test'];

    include_once("../database/Connection.php");

    $result = mysqli_query($connection, "UPDATE data_siswa SET nim = '$nim', nama_lengkap='$name', alamat='$address', nilai_harian='$nilai_harian', nilai_mid_semester='$nilai_mid_semester', nilai_final_test='$nilai_final_test' WHERE id = $id");

    echo "<br /> Data Siswa Berhasil diperbaharui. <a href='../../admin/index.php'>Back To Home</a>";
}
