<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];

    // update user data
    $result = mysqli_query($konek, "UPDATE tsiswa_27 SET nim='$nim',nama='$nama',alamat='$alamat',n1='$n1',n2='$n2',n3='$n3' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: halaman_admin.php");
}
?>
<?php
// Display selected user data based on id, JIKA DIKLIK TOMBOL EDIT AKAN TAMPIL DATANYA
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM tsiswa_27 WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $n1 = $user_data['n1'];
    $n2 = $user_data['n2'];
    $n3 = $user_data['n3'];
}
?>
<html>
<head>  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>

    <div class="container pt-4 bg-white">
		<div class="row">
			<div class="col-md-8 col-xl-8">
				<h2>Edit Data Siswa</h2>
                <form name="update_user" method="post" action="edit.php">
                    <div class="mb-3">
						<label class="form-label">NIM</label>
						<input type="text" class="form-control" name="nim" value=<?php echo $nim;?>>
					</div>
                    <div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama" value=<?php echo $nama;?>>
					</div>
                    <div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" name="alamat" value=<?php echo $alamat;?>>
					</div>
                    <div class="mb-3">
						<label class="form-label">Nilai Harian</label>
						<input type="text" class="form-control" name="n1" value=<?php echo $n1;?>>
					</div>
                    <div class="mb-3">
						<label class="form-label">Nilai MID TEST</label>
						<input type="text" class="form-control" name="n2" value=<?php echo $n2;?>>
					</div>
                    <div class="mb-3">
						<label class="form-label">Nilai FINAL TEST</label>
						<input type="text" class="form-control" name="n3" value=<?php echo $n3;?>>
					</div>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <button type="submit" name="update" value="Update" class="btn btn-primary">Submit</button>
                    </tr>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>