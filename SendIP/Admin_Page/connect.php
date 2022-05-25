<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$database = "ip";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>