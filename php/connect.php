<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "arknights_login";
// Function to start a session
session_start();
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>