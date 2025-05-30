<?php
include 'connect.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>All Books</title>
</head>
<body>
  <h2>Books in Library</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Category</th>
      <th>Quantity</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
