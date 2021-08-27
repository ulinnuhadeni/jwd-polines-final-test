<?php

session_start();

require_once("../database/Connection.php");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $md5PasswordHashed = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result =  mysqli_query($connection, $query);
    $check = mysqli_fetch_array($result);


    if ($md5PasswordHashed == $check['password']) {
        if ($check['isAdmin'] == true) {
            $_SESSION['username'] =  $check['username'];
            $_SESSION['isAdmin'] =  $check['isAdmin'];
            header("Location: ../../admin/index.php");
        } else {
            header("Location: ../../user-page.php");
        }
    } else {
        header("location:../../login.php");
    }
}
