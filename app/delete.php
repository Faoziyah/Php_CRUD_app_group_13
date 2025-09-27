<?php
include 'db.php';
$sql = "DELETE FROM test_table WHERE id=1";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>