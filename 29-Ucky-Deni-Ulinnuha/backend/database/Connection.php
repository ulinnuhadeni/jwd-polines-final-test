<?php
$username = 'root';
$database = '29_Ucky_Deni_Ulinnuha';
$password = '';
$host = 'localhost';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    echo 'Database Tidak Terhubung';
}
