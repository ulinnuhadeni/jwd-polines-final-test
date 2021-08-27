<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Favicon Website Links -->
	<link rel="shortcut icon" href="../../assets/images/person-icon.svg" type="image/x-icon" />

	<!-- Bootstrap core CSS -->
	<link href="../../../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />

	<!-- Website CSS Links-->
	<link href="../../assets/css-pages/input-edit-data.css" rel="stylesheet" />

	<title>Input Data User</title>
</head>

<body class="bg-light">
	<div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="../../assets/images/person-icon.svg" alt="" width="72" height="57" />
				<div class="btn-toolbar mb-2 mb-md-0 d-flex justify-content-center">
					<div class="btn-group me-2">
						<a href="input-siswa.php" class="btn btn-sm btn-outline-success" target="_blank">
							Input Data
						</a>
						<a href="../index.php" class="btn btn-sm btn-outline-primary" target="_blank">
							Homepage
						</a>
						<a href="../../backend/auth/logout.php" class="btn btn-sm btn-outline-danger"> Logout </a>
					</div>
				</div>

				<h2>Input Data User</h2>
				<p class="lead">
					Silahkan isi data - data sesuai dengan ketentuan form dibawah ini !
				</p>
			</div>

			<div class="row">
				<div class="col-md-12 col-lg-12">
					<form action="../../backend/crud/create.php" class="needs-validation" method="POST" novalidate>
						<div class="row g-3">
							<div class="col-sm-6">
								<label for="nim" class="form-label">NIM</label>
								<input type="text" name="nim" class="form-control" id="nim" placeholder="Silahkan isikan NIM anda" value="" required />
								<div class="invalid-feedback">NIM is Required.</div>
							</div>

							<div class="col-sm-6">
								<label for="namaLengkap" class="form-label">Nama Lengkap</label>
								<input type="text" name="nama_lengkap" class="form-control" id="namaLengkap" placeholder="Silahkan isikan Nama Lengkap Anda" value="" required />
								<div class="invalid-feedback">Nama Lengkap is required.</div>
							</div>

							<div class="col-12">
								<label for="address" class="form-label">Alamat</label>
								<input type="text" name="alamat" class="form-control" id="address" placeholder="Silahkan isikan Alamat Lengkap Anda " required />
								<div class="invalid-feedback">Alamat is required.</div>
							</div>

							<div class="col-md-5">
								<label for="nilaiHarian" class="form-label">Nilai Harian</label>
								<input type="number" name="nilai_harian" class="form-control" id="nilaiHarian" placeholder="nilai dimulai dari 0-100" required />
								<div class="invalid-feedback">Nilai Harian is required.</div>
							</div>

							<div class="col-md-4">
								<label for="nilaiMidSemester" class="form-label">Nilai Mid Semester</label>
								<input type="number" name="nilai_mid_semester" class="form-control" id="nilaiMidSemester" placeholder="nilai dimulai dari 0-100" required />
								<div class="invalid-feedback">
									Nilai Mid Semester is required.
								</div>
							</div>

							<div class="col-md-3">
								<label for="nilaiFinal" class="form-label">Nilai Final Project</label>
								<input type="number" name="nilai_final_test" class="form-control" id="nilaiFinal" placeholder="nilai dimulai dari 0-100" required />
								<div class="invalid-feedback">
									Nilai Final Project is required.
								</div>
							</div>
						</div>

						<hr class="my-4" />

						<button class="w-100 btn btn-outline-primary btn-lg" type="submit" name="submit">
							Submit Data
						</button>
					</form>
				</div>
			</div>
		</main>

		<footer class="mt-4">
			<p class="text-center text-muted">
				Copyright &copy; 2021 by Ucky Deni Ulinnuha
			</p>
			<p class="text-center text-muted mt-0">
				Template by
				<a class="copyright" href="getbootstrap.com" target="_blank">
					Bootstrap
				</a>
			</p>
		</footer>
	</div>

	<script src="../../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js-pages/form-validation.js"></script>
</body>

</html>