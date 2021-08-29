<?php

session_start();

include 'koneksi.php';

error_reporting(0);

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $hasil = mysqli_query($konek,"SELECT * FROM user WHERE username = '$username'");
  foreach ($hasil as $data);
  $pass = $data['password'];
  $level = $data['level'];

  // mengecek username tersedia / tidak
  if ($cek = mysqli_num_rows($hasil) > 0) {
    // mengecek password
    if ($password == $pass ) {
      // set session
      $_SESSION['level'] = $level;
      $_SESSION['username'] = $username;
      if($level=='1')
      {
        header('location:level1/indexl1.php');
      }elseif($level=='2'){
        header('location:level2/indexl2.php');
      }
    }else{ // pesan salah Password
      echo "<script> alert('Password atau Username yang Anda masukkan salah')</script>";
    }
    }else{ // pesan salah username
      echo "<script> alert('Username yang Anda masukkan salah')</script>";
    }

}

?>