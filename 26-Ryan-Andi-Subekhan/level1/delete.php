<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tsiswa_nourutpeserta WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:indexl1.php");
?>