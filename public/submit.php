<?php
include('../config/db_conn.php');

// Validate and insert data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student (firstname, lastname, gender, date_of_birth, address, phone_number, email)
            VALUES ('$firstname', '$lastname', '$gender', '$dob', '$address', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location:students.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
