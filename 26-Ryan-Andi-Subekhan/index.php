<?php

include 'cek.php';

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <!-- Google Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

  <body>

    <!-- Gambar --> 
    <section class="login py-5 bg-light">
      <div class="container">
        <div class="row g-0">
          <div class="col-lg-5">
            <img src="img/05b.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 text-center py-5">
              <h1>Login</h1>

              <form action="" method="POST">
                <div class="form-row py-3 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="text" name="username" id="username" class="input px-3" placeholder="Username" required="yes">
                  </div>
                </div>
                <div class="form-row py-3">
                  <div class="offset-1 col-lg-10">
                    <input type="password" name="password" id="password" class="input px-3" placeholder="Password" required="yes">
                  </div>
                </div>
                <div class="form-row py-3">
                  <div class="offset-1 col-lg-10">
                    <input type="submit" name="submit" class="btn1" value="submit">
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>    

  </body>