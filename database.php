<?php
$hostName = "localhost";
$dbUser = "root";  // Corrected case
$dbPassword = "";
$dbName = "scrapout";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
