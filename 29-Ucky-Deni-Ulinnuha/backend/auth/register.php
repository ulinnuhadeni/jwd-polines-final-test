<?php
require_once("../database/Connection.php");

if (isset($_POST['register'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $isAdmin = filter_input(INPUT_POST, 'isAdmin');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $result = mysqli_query($connection, "INSERT INTO users (username, email, isAdmin, password) VALUES('$username', '$email', '$isAdmin', '$password')");

    header("Location: ../../login.php");
}
