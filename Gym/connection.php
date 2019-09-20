<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "213.190.6.127";
$username = "u972902333_wp";
$password = "webprogramming";
$dbname = "u972902333_gym";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
