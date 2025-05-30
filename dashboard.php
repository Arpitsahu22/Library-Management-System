<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
  <p>You are logged in as <strong><?php echo $_SESSION['user_role']; ?></strong>.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
