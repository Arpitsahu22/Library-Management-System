<?php
include 'connect.php'; // This connects to MySQL

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password']; // In real apps, you should hash this!

// Default role = user
$role = 'user';

// SQL to insert user
$sql = "INSERT INTO users (name, email, password, role)
        VALUES ('$name', '$email', '$password', '$role')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
} else {
    echo "❌ Error: " . $conn->error;
}
?>
