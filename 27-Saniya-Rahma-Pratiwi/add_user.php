
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Mahasiswa</title>
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
				<legend><h2>Silahkan Masukkan Data Sesuai Petunjuk</h2></legend>
    <form action="add.php" method="post" name="form1">
      <fieldset>
        <div class="mb-3">
				<label class="form-label">NIM</label>
				<input type="text" class="form-control" name="nim" placeholder="XXXXX">
			</div>
			<div class="mb-3">
				<label class="form-label">Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="max 20 char">
			</div>
			<div class="mb-3">
				<label class="form-label">Alamat</label>
				<input type="text" class="form-control" name="alamat" placeholder="max 30 char">
			</div>
			<div class="mb-3">
				<label class="form-label">Nilai Harian</label>
				<input type="text" class="form-control" name="n1" placeholder="Nilai antara 0 s.d 100">
			</div>
			<div class="mb-3">
				<label class="form-label">Nilai MID Test</label>
				<input type="text" class="form-control" name="n2" placeholder="Nilai antara 0 s.d 100">
			</div>
			<div class="mb-3">
				<label class="form-label">Nilai FINAL Test</label>
				<input type="text" class="form-control" name="n3" placeholder="Nilai antara 0 s.d 100">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
			<button type="reset" name="Cancel" class="btn btn-primary" href="logout_admin.php">Cancel</button>
      	</fieldset>
    </form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($konek, "INSERT INTO tsiswa_27(nim,nama,alamat,n1,n2,n3) VALUES('$nim','$nama','$alamat','$n1','$n2','$n3')");
		
		// Show message when user added
		echo "User added successfully. <a href='halaman_user.php'>View Users</a>";
	}
	?>
</body>
</html>


