<?php
include'dblink.php';



// sql to create table
$sql = "CREATE TABLE MyGuests3 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests3 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>