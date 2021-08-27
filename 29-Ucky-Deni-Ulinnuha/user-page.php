<?php
session_start();

if (isset($_SESSION['username']) == '' || $_SESSION['isAdmin'] == false) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="assets/images/world-icon.svg" type="image/x-icon">

        <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />

        <!-- Website Font Links -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

        <title>User Page Without Auth</title>
    </head>

    <style>
        body {
            background-color: cornflowerblue;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>

    <body>
        <div class="container py-4">

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Halo User </h1>
                    <p class="col-md-8 fs-4">
                        Anda Sedang Memasuki area User saja,
                        apabila anda ingin mengakses halaman admin
                        silahkan pilih 'Yes' saat Registrasi User . . . .
                    </p>
                    <a class="btn btn-outline-primary btn-lg" href="register.php" target="_blank">Kembali Ke Halaman Register</a>
                    <a class="btn btn-outline-danger btn-lg" href="backend/auth/logout.php">Logout</a>
                </div>
            </div>
            <footer>
                <p class="text-center text-white"> Copyright &copy; 2021 by Ucky Deni Ulinnuha</p>
                <p class="text-center text-white mt-0"> Template by <a class="copyright" href="getbootstrap.com" target="_blank"> Bootstrap </a> </p>
            </footer>
        </div>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
}
?>