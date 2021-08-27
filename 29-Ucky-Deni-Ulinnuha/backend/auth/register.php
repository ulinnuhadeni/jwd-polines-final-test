<?php
require_once("../database/Connection.php");

if (isset($_POST['register'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $result = mysqli_query($connection, "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')");

    header("Location: ../../login.php");
}
