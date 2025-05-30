<?php
include 'connect.php';

$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO books (title, author, category, quantity)
        VALUES ('$title', '$author', '$category', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Book added successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}
?>
