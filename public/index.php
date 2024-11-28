<?php include('../includes/header.php'); ?>

<h2>Student Registration</h2>
<form action="submit.php" method="POST">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required><br><br>
    
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
    
    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>
    
    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>
    
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <input type="submit" value="Submit">
</form>

<?php include('../includes/footer.php'); ?>
