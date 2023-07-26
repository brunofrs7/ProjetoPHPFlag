<?php
include('db/conn.php');

$sql = "SELECT * FROM course WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>