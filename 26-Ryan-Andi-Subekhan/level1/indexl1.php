<?php // FILE index.php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database - Mengambil Data Siswa
$result = mysqli_query($mysqli, "SELECT * FROM tsiswa_nourutpeserta");
?>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

<html>
<head>    
    <title>Homepage</title>
</head>

<body>

<center><h2>REKAP DATA NILAI SISWA DTS KOMINFO – JWD 2021</h2></center>

<div><p>&emsp;&emsp;&emsp;&emsp;<a href="add.php" class="btn btn-info">Add New Siswa</a></p></div>
    <div class="container-fluid">
    <table class="table table-striped table-bordered"> <!-- border="1" cellspacing="0" width='98%' -->

    <tr class="text-center table-primary">
        <th>NIM</th> 
        <th>Nama</th> 
        <th>Alamat</th> 
        <th>N. HARIAN(N1) </th> 
        <th>N. MID TEST(N2) </th> 
        <th>N. FINAL TEST(N3) </th> 
        <th>Dengan Huruf</th> 
        <th>Predikat</th> 
        <th>ACTION</th>
    </tr>
    </div>

    <?php 
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td align=center>".$user_data['nim']."</td>";   //KOLOM 1
        echo "<td >".$user_data['nama']."</td>"; //KOLOM 2
        echo "<td >".$user_data['alamat']."</td>";  //KOLOM 3
        echo "<td align=center>".$user_data['nHarian']."</td>";   //KOLOM 4
        echo "<td align=center>".$user_data['nMid']."</td>"; //KOLOM 5
        echo "<td align=center>".$user_data['nFinal']."</td>";  //KOLOM 6
        echo "<td align=center>".$user_data['huruf']."</td>"; //KOLOM 7
        echo "<td align=center>".$user_data['predikat']."</td>";  //KOLOM 8
        echo "<td align=center><a href='edit.php?id=$user_data[id]'class='btn btn-info'>Edit</a> | <a href='delete.php?id=$user_data[id]'class='btn btn-danger'>Delete</a></td></tr>";
        
 
        // menghitung jumlah siswa
        $jumSiswa = mysqli_num_rows($result);       
    }
    ?>
    
    </table>
        
         
        <p>Total siswa adalah : <b><?php echo $jumSiswa; ?></b> orang</p>

        <a href="../index.php" class="btn btn-primary tombol">Back to Login</a>
</body>
</html>