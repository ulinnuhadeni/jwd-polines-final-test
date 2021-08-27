<?php

include_once("../database/Connection.php");

$id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM data_siswa WHERE id=$id");

echo "<br /> Data Siswa Berhasil dihapus. <br /> <a href='../../admin/index.php'>Back To Home</a>";
