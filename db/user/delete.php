<?php
session_start();
$id = $_SESSION['id'];

include('../conn.php');

$sql = "DELETE FROM user WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=logout');
} else {
    header('Location: ../../index.php?p=account&r=deleteerror');
}

$conn->close();
?>