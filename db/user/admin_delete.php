<?php
$id = $_GET['id'];

include('../conn.php');

$sql = "DELETE FROM user WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=administration&r=deleteok');
} else {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=deleteerror');
}

$conn->close();
?>