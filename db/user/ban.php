<?php
$id = $_POST['user_details_new_ban_id'];
$banned = $_POST['user_details_new_ban'];

include('../conn.php');

$sql = "UPDATE user SET banned='$banned' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updatebanok');
} else {
    header('Location: ../../index.php?p=user_details&id='.$id.'&r=updatebanerror');
}

$conn->close();
?>