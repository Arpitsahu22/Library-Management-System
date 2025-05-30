<?php
session_start();
include 'connect.php';

// Get email and password from form
$email = $_POST['email'];
$password = $_POST['password'];

// Search for user in database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found
    $user = $result->fetch_assoc();

    // Set session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_role'] = $user['role'];

    // Redirect to dashboard
    header("Location: dashboard.php");
} else {
    echo "❌ Invalid email or password!";
}
?>