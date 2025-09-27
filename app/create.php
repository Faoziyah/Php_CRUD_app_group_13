<?php
include 'db.php';
$sql = "INSERT INTO test_table (name) VALUES ('New Entry')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>