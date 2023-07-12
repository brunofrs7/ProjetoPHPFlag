<?php
session_start();
$id = $_GET['id'];

include('../conn.php');

$sql = "DELETE FROM usertype WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=administration&r=usertypedeleteok');
} else {
    header('Location: ../../index.php?p=usertype_details&r=usertypedeleteerror');
}

$conn->close();
?>