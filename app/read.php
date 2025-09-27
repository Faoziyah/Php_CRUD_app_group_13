<?php
include 'db.php';
$result = $conn->query("SELECT * FROM test_table");
while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
}
$conn->close();
?>