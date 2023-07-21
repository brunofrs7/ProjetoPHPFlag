<?php
include('../conn.php');
session_start();
$id = $_SESSION['id'];
$imageName = 'u'.$id.'.png';
$sql = "UPDATE user SET image='$imageName' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    include('../../services/uploadUserImage.php');
    header('Location: ../../index.php?p=account&r=newimageok');
} else {
    header('Location: ../../index.php?p=account&r=newimageerror');
}
$conn->close();
?>