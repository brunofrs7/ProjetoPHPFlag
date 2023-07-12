<?php
include('db/conn.php');

$id = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>