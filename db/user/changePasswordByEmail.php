<?php
include('../conn.php');

$sql = "UPDATE user SET password= MD5('$pass') WHERE email='$email'";
$conn->query($sql) === TRUE;

$conn->close();
?>