<?php
include('../conn.php');
$id = $_GET["id"];

$sql = "UPDATE user SET password= MD5('$pass') WHERE id=$id";
$conn->query($sql) === TRUE;

$conn->close();
?>