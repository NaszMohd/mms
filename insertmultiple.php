<?php
include'dblink.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Yusuf', 'Ahmad', 'ya@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Aminah', 'Ranger', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Afif', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>