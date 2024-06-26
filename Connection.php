<?php
$servername = "localhost";
$username = "basketballdev";
$password = "qam$9Hruqrzm";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
