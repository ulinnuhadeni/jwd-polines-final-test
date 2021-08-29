<html>
<head>
    <title>Add Users</title>



    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <!-- Baru -->
    <div class="container">

        <a href="indexl1.php">Go to Data</a>

        <div class="title">Silahkan Masukkan Data Sesuai Petunjuk</div>
        <form action="add.php" method="post" name="form1">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">NIM</span>
                    <input type="text" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="input-box">
                    <span class="details">Nilai Harian</span>
                    <input type="text" name="nHarian" placeholder="Nilai antara 0 s.d 100" required>
                </div>
                <div class="input-box">
                    <span class="details">Nama</span>
                    <input type="text" name="nama" placeholder="max 30 char" required>
                </div>
                <div class="input-box">
                    <span class="details">Nilai MID TEST</span>
                    <input type="text" name="nMid" placeholder="Nilai antara 0 s.d 100" required>
                </div>
                <div class="input-box">
                    <span class="details">Alamat</span>
                    <input type="text" name="alamat" placeholder="max 20 char" required>
                </div>
                <div class="input-box">
                    <span class="details">Nilai FINAL TEST</span>
                    <input type="text" name="nFinal" placeholder="Nilai antara 0 s.d 100" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="Submit" value="PROCESS">
                <input type="reset" name="Reset" value="CANCEL">
            </div>



    <!-- Lama -->


    <br/><br/>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nHarian = $_POST['nHarian'];
        $nMid = $_POST['nMid'];
        $nFinal = $_POST['nFinal'];

        $na=($nHarian + $nMid + $nFinal) /3;

        if ($na <= 60 )
            {
            $nh = 'E' ; $pre = 'GAGAL';
            }
            else if ($na <= 69 )
            {
            $nh = 'D' ; $pre = 'KURANG';
            }

            else if ($na <= 79 )
            {
            $nh = 'C' ; $pre = 'CUKUP';
            }
            else if ($na <= 89 )
            {
            $nh = 'B' ; $pre = 'BAIK';
            }
            else
            {
            $nh = 'A' ; $pre = 'MEMUASKAN';
            }

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tsiswa_nourutpeserta(nim,nama,alamat,nHarian,nMid,nFinal,huruf,predikat) VALUES('$nim','$nama','$alamat','$nHarian','$nMid','$nFinal', '$nh', '$pre')");

        // Show message when user added
        echo "Data siswa sukses di input. <a href='indexl1.php'class='btn btn-info'>Tampilkan Data</a>";
    }
    ?>

      </form>
    </div>

</body>
</html>