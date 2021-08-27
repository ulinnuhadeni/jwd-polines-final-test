<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon Website Links -->
	<link rel="shortcut icon" href="assets/images/person-icon.svg" type="image/x-icon" />

	<!-- Website Font Links -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

	<!-- CSS Links -->
	<link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css-pages/login-register.css" />
	<title>Register User</title>
</head>

<body>
	<main class="form-signin text-center">
		<form action="backend/auth/register.php" method="POST" class="needs-validation" novalidate>
			<img class="mb-4" src="assets/images/world-icon.svg" alt="" width="72" height="57" />
			<h1 class="h3 mb-3 fw-normal">Register</h1>

			<div class="form-floating mb-2">
				<input type="text" name="username" class="form-control" id="userName" placeholder="username" />
				<label for="userName">Username</label>
				<div class="invalid-feedback">Username is Required.</div>
			</div>

			<div class="form-floating mb-2">
				<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" />
				<label for="email">Email address</label>
				<div class="invalid-feedback">Email Address is Required.</div>
			</div>
			<div class="form-check mt-4 mb-4 text-start">
				<h6 class="text-start">Apakah anda ingin menjadi admin ?</h6>
				<div class="row">
					<div class="col-sm-6">
						<input class="form-check-input mx-auto" type="radio" name="isAdmin" id="exampleRadios1" value="1">
						<label class="form-check-label mx-2" for="exampleRadios1"> Yes </label>
					</div>
					<div class="col-sm-6">
						<input class="form-check-input mx-auto" type="radio" name="isAdmin" id="exampleRadios1" value="0" checked>
						<label class="form-check-label mx-2" for="exampleRadios1"> No </label>
					</div>
				</div>
			</div>
			<div class="form-floating">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" />
				<label for="password">Password</label>
				<div class="invalid-feedback">Password is Required.</div>
			</div>
			<button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="register">
				Register
			</button>
			<p class="mt-2">
				Have an account ? please <a href="login.php">Login</a>
			</p>
			<p class="mt-5 mb-3 text-muted">&copy; 2021 by Ucky Deni Ulinnuha</p>
			<p class="mt-2 mb-3 text-muted">
				Designed by
				<a href="getbootstrap.com"> Bootstrap </a>
			</p>
		</form>
	</main>

	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="assets/js-pages/form-validation.js"></script>
</body>

</html>