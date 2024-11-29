<?php
include('../config/db_conn.php');

$result = $conn->query("SELECT * FROM student");

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

$conn->close();
?>

<?php include('../includes/header.php'); ?>

<h2>Registered Students</h2>
<table id="studentTable" class="display">
    <thead>
        <tr>
            <th>No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id']?></td>
                <td><?= $student['firstname'] ?></td>
                <td><?= $student['lastname'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td><?= $student['date_of_birth'] ?></td>
                <td><?= $student['address'] ?></td>
                <td><?= $student['phone_number'] ?></td>
                <td><?= $student['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#studentTable').DataTable();
});
</script>

<?php include('../includes/footer.php'); ?>