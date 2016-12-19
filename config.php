<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dbblog";

// Create og Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "connected";
?>