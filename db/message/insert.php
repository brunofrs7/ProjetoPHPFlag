<?php
include('../db/conn.php');

/*$sql = "INSERT INTO message (email, message, date_time) VALUES ('$email', '$message', NOW())";
$conn->query($sql);*/

/*if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

// prepare and bind
$stmt = $conn->prepare("INSERT INTO message (email, message, date_time) VALUES (?, ?, NOW())");
$stmt->bind_param("ss", $qEmail, $qMessage);

// set parameters and execute
$qEmail = $email;
$qMessage = $message;
$stmt->execute();

$stmt->close();
$conn->close();
?>