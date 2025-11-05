<?php
// Connect to local MySQL via XAMPP
$connection = mysqli_connect("localhost", "root", "", "zerowaste_db");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
