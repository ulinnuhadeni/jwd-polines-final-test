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
	<title>Login</title>
</head>

<body>
	<main class="form-signin text-center">
		<form action="backend/auth/login.php" method="POST" class="needs-validation" novalidate>
			<img class="mb-4" src="assets/images/world-icon.svg" alt="" width="72" height="57" />
			<h1 class="h3 mb-3 fw-normal">Log In</h1>

			<div class="form-floating mb-2">
				<input type="text" name="username" class="form-control" id="userName" placeholder="youremail@mail.com | your username" required />
				<label for="userName">Email address or Username</label>
				<div class="invalid-feedback">
					Email address or Username are Required.
				</div>
			</div>
			<div class="form-floating">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
				<label for="password">Password</label>
				<div class="invalid-feedback">Password is Required.</div>
			</div>
			<button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="login">
				Sign in
			</button>
			<p class="mt-2">
				Dont have an account ? please <a href="register.php">Register</a>
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