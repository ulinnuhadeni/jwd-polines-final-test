<?php
//variabel koneksi
$konek = mysqli_connect("localhost","root","","cek_login");
if(!$konek){
	echo "Koneksi Database Gagal";
}
?>