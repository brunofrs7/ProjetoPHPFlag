<?php
$id = $_GET['id'];

include('../conn.php');

$sql = "UPDATE user SET image='' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updateimageok');
} else {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updateimageerror');
}

$conn->close();
?>