<?php
include'dblink.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Yusuf";
$lastname = "Terbang";
$email = "yt@example.com";
$stmt->execute();

$firstname = "Ahmad";
$lastname = "Nisfu";
$email = "an@example.com";
$stmt->execute();

$firstname = "Ali";
$lastname = "Dooley";
$email = "alie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>