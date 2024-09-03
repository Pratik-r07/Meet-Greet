<?php
$hostName ="localhost";
$dbUser = "root";
$dbPassword = "";
$dbName ="community";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("something went wrong");
}
?>
