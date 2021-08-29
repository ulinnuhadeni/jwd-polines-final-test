<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$pasmd5 = md5($password);

$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysqli_query($konek,$query);
$data = mysqli_fetch_array($hasil);
$level = $data['level'];

	//kondisi untuk memeriksa password salah
    if ($pasmd5 == $data['password']) 
    {
	
	    // menyimpan username dan level ke dalam session
	    $_SESSION['level'] = $data['level'];
	    $_SESSION['username'] = $data['username'];

	    if($level=='1')
	    {
	     	echo"<html><body  onLoad=javascript:window.location.href='halaman_admin.php'></body></html>";
	    }elseif($level=='2'){
	    	echo"<html><body  onLoad=javascript:window.location.href='halaman_user.php'></body></html>";
	    }
    }else{
			?><script language="JavaScript">
                                    alert('Password yang Anda masukkan salah');
				document.location='index.php';
				
				</script><?php
 	}?>

