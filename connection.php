<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "dbusername";
$password = "dbpassword";
$dbname = "dpname";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
