<?php
session_start();

if ($_SESSION['isAdmin'] == false) {
	header("Location: ../user-page.php");
}

if (isset($_SESSION['username']) == '' || $_SESSION['isAdmin'] == true) {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Favicon Website Links -->
		<link rel="shortcut icon" href="../assets/images/person-icon.svg" type="image/x-icon" />

		<!-- Website Font Links -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

		<!-- CSS Links -->
		<link href="../../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../assets/css-pages/dashboard.css" />
		<title>Dashboard Administrator</title>
	</head>

	<body>
		<div class="container">
			<main class="ms-sm-auto">
				<div class="
						d-flex
						justify-content-center
						flex-wrap flex-md-nowrap
						align-items-center
						pt-3
						pb-2
						mb-3
						border-bottom
					">
					<h3 class="text-center"> <strong> Daftar Siswa <br> Junior Web Development POLINES </strong></h3>
				</div>

				<div class="
                    btn-toolbar 
                    mb-2 
                    mb-md-0  
                    d-flex
                    justify-content-center
                ">
					<div class="btn-group me-2">
						<a href="siswa/input-siswa.php" class="btn btn-sm btn-outline-success" target="_blank">
							Input Data
						</a>
						<a href="index.php" class="btn btn-sm btn-outline-primary">
							Homepage
						</a>
						<a href="../backend/auth/logout.php" class="btn btn-sm btn-outline-danger">
							Logout
						</a>
					</div>
				</div>

				<div class="table-responsive mt-3">
					<table class="table table-striped table-sm text-center">
						<thead>
							<tr>
								<th scope="col"> No</th>
								<th scope="col"> NIM</th>
								<th scope="col"> Nama Lengkap</th>
								<th scope="col"> Alamat</th>
								<th scope="col"> Nilai Harian</strong></th>
								<th scope="col"> Nilai Mid Semester</th>
								<th scope="col"> Nilai Final Test</th>
								<th scope="col"> Nilai (Dengan Huruf)</th>
								<th scope="col"> Predikat</th>
								<th scope="col"> Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include '../backend/database/Connection.php';
							$result = mysqli_query($connection, " SELECT * FROM data_siswa ORDER BY id ");
							while ($user_data = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>" . $user_data['id'] . "</td>";
								echo "<td>" . $user_data['nim'] . "</td>";
								echo "<td>" . $user_data['nama_lengkap'] . "</td>";
								echo "<td>" . $user_data['alamat'] . "</td>";
								echo "<td>" . $user_data['nilai_harian'] . "</td>";
								echo "<td>" . $user_data['nilai_mid_semester'] . "</td>";
								echo "<td>" . $user_data['nilai_final_test'] . "</td>";

								$total = $user_data['nilai_harian'] + $user_data['nilai_mid_semester'] + $user_data['nilai_final_test'];
								$nilai_hasil = $total / 3;

								switch (true) {
									case ($nilai_hasil >= 90):
										$nilai_huruf = 'A';
										$predikat = 'MEMUASKAN';
										break;
									case ($nilai_hasil >= 80 && $nilai_hasil <= 89):
										$nilai_huruf = 'B';
										$predikat = 'BAIK';
										break;
									case ($nilai_hasil >= 70 && $nilai_hasil <= 79):
										$nilai_huruf = 'C';
										$predikat = 'CUKUP';
										break;
									case ($nilai_hasil >= 60 && $nilai_hasil <= 69):
										$nilai_huruf = 'D';
										$predikat = 'KURANG';
										break;
									default:
										$nilai_huruf = 'E';
										$predikat = 'GAGAL';
								}

								echo "<td>" . $nilai_huruf . "</td>";
								echo "<td>" . $predikat . "</td>";
								echo "<td>
											<a href='siswa/edit-siswa.php?id=$user_data[id]' class='btn btn-sm btn-outline-success' target='_blank'> Edit</a> |
											<a href='../backend/crud/delete.php?id=$user_data[id]' class='btn btn-sm btn-outline-danger' >Delete</a>
								 </td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</main>
		</div>
		<footer>
			<p class="text-center text-muted"> Copyright &copy; 2021 by Ucky Deni Ulinnuha</p>
			<p class="text-center text-muted mt-0"> Template by <a class="copyright" href="getbootstrap.com" target="_blank"> Bootstrap </a> </p>
		</footer>
		<script src="../../assets/js/popper.min.js"></script>
		<script src="../../assets/js/bootstrap.min.js"></script>
	</body>

	</html>
<?php
}
?>