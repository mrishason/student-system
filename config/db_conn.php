<?php
$server_name = "localhost";
$username = "root"; 
$password = "@#King2011"; 
$dbname = "outstudent";

// Database Connection
$conn = new mysqli($server_name, $username, $password, $dbname);

// Check Connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>