<?php
include 'dblink.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Anas', 'Mohd', 'anasmohd@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>