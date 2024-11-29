<?php
$server_name = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "outstudent";

// Database Connection
$conn = new mysqli($server_name, $username, $password, $dbname);

// Check Connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>