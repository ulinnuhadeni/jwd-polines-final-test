<?php

if (isset($_POST['submit'])) {

    $nim = $_POST['nim'];
    $name = $_POST['nama_lengkap'];
    $address = $_POST['alamat'];
    $nilai_harian = $_POST['nilai_harian'];
    $nilai_mid_semester = $_POST['nilai_mid_semester'];
    $nilai_final_test = $_POST['nilai_final_test'];

    include_once("../database/Connection.php");

    $result = mysqli_query($connection, "INSERT INTO data_siswa(nim, nama_lengkap, alamat, nilai_harian, nilai_mid_semester, nilai_final_test) VALUES('$nim', '$name', '$address','$nilai_harian', '$nilai_mid_semester', '$nilai_final_test')");

    header("Location: ../../admin/index.php");
} else {
    echo "Your Data is Invalid";
}
