<?php
$user = $_POST['new_user_username'];
$usertype = $_POST['new_user_usertype'];

include('../conn.php');

// prepare and bind
$stmt = $conn->prepare("INSERT INTO user (email, password, username, usertype_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $qEmail, $qPassword, $qUser, $qUsertype);

// set parameters and execute
$qEmail = $email;
$qPassword = MD5($pass);
$qUser = $user;
$qUsertype = $usertype;

try{
    $stmt->execute();
}catch(Exception $e){
    header('Location: ../../index.php?p=administration&r=inserterror');
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();
$conn->close();
?>