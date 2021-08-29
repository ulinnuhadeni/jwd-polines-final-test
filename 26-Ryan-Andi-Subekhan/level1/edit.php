<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nHarian = $_POST['nHarian'];
    $nMid = $_POST['nMid'];
    $nFinal = $_POST['nFinal'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tsiswa_nourutpeserta SET nim='$nim', nama='$nama', alamat='$alamat', nHarian='$nHarian', nMid='$nMid', nFinal='$nFinal' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: indexl1.php");
}
?>
<?php
// Display selected user data based on id, JIKA DIKLIK TOMBOL EDIT AKAN TAMPIL DATANYA
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tsiswa_nourutpeserta WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $nHarian = $user_data['nHarian'];
    $nMid = $user_data['nMid'];
    $nFinal = $user_data['nFinal'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <div class="container">

    <a href="indexl1.php">Go to Data</a>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">NIM</span>
                    <input type="text" name="nim" value=<?php echo $nim;?>>
                </div>
                <div class="input-box">
                    <span class="details">Nilai Harian</span>
                    <input type="text" name="nHarian" value=<?php echo $nHarian;?>>
                </div>
                <div class="input-box">
                    <span class="details">Nama</span>
                    <input type="text" name="nama" value=<?php echo $nama;?>>
                </div>
                <div class="input-box">
                    <span class="details">Nilai MID TEST</span>
                    <input type="text" name="nMid" value=<?php echo $nMid;?>>
                </div>
                <div class="input-box">
                    <span class="details">Alamat</span>
                    <input type="text" name="alamat" value=<?php echo $alamat;?>>
                </div>
                <div class="input-box">
                    <span class="details">Nilai FINAL TEST</span>
                    <input type="text" name="nFinal" value=<?php echo $nFinal;?>>
                </div>
            </div>
            <div class="button">
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <input type="submit" name="update" value="Update">
            </div>
        </table>
    </form>
    </div>

</body>
</html>