<?php
include('../conn.php');

$email = $_POST['email'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = MD5('$passwd')";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  echo "Login OK";
} else {
  echo "Login Error";
}
$conn->close();
?>