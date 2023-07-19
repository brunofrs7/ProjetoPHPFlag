<?php
$id = $_GET['id'];

include('../conn.php');

$sql = "UPDATE user SET banned=NULL WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updatebanok');
} else {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updatebanerror');
}

$conn->close();
?>