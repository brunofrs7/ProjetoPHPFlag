<?php

$id = $_POST['user_details_id'];
$email = $_POST['user_details_email'];
$user = $_POST['user_details_username'];
$usertype_id = $_POST['user_details_usertype'];

include('../conn.php');

$sql = "UPDATE user SET email='$email', username='$user', usertype_id=$usertype_id WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updateok');
} else {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updateerror');
}

$conn->close();
?>