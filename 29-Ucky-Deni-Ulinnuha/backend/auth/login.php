<?php

require_once("../database/Connection.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $result =  mysqli_query($connection, "SELECT * FROM users WHERE username=$username OR email=$email AND password=$password ");
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        header("Location: ../../admin/index.php");
    } else {
        header("location:../../login.php");
    }
}
