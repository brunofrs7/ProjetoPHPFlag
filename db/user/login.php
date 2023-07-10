<?php
include('../conn.php');

$email = $_POST['email'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = MD5('$passwd')";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['email'] = $row['email'];
    $_SESSION['usertype_id'] = $row['usertype_id'];

    header('Location: ../../index.php?p=account');
} else {
    header('Location: ../../index.php?p=login&r=loginerror');
}
$conn->close();
?>