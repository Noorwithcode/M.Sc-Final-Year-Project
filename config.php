<?php

session_start();
// Database credentials
$servername = "localhost";  // Database host
$username = "root";     // Database username
$password = "";     // Database password
$dbname = "plant";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$con = $conn;
// Check connection
if ($conn->connect_error)

{
    die("Connection failed: " . $conn->connect_error);
}
// echo "Databases Connected Sucessfully !";
?>