<?php
session_start();
$id = $_SESSION['id'];
$email = $_POST['account_email'];
$user = $_POST['account_username'];
$passwd = $_POST['account_password'];
$passwd1 = $_POST['account_password1'];

if($passwd != $passwd1){
    header('Location: ../../index.php?p=account&r=passerror');
    exit();
}

include('../conn.php');

$sql = "UPDATE user SET email='$email', username='$user', password= MD5('$passwd') WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=account&r=updateok');
} else {
    header('Location: ../../index.php?p=account&r=updateerror');
}

$conn->close();
?>