<?php
include('../conn.php');

$email = $_POST['email'];
$passwd = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = MD5('$passwd')";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['usertype_id'] = $row['usertype_id'];

    $id = $row['id'];
    $sql1 = "UPDATE user SET last_login = NOW() WHERE id = $id";
    $conn->query($sql1);

    header('Location: ../../index.php?p=account');
} else {
    header('Location: ../../index.php?p=login&r=loginerror');
}
$conn->close();
?>