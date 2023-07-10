<?php
$email = $_POST['email'];
$passwd = $_POST['password'];
$passwd1 = $_POST['password1'];

if($passwd != $passwd1){
    header('Location: ../../index.php?p=register&r=passerror');
    exit();
}

include('../conn.php');

// prepare and bind
$stmt = $conn->prepare("INSERT INTO user (email, password, usertype_id) VALUES (?, ?, 3)");
$stmt->bind_param("ss", $qEmail, $qPassword);

// set parameters and execute
$qEmail = $email;
$qPassword = MD5($passwd);
try{
    $stmt->execute();
}catch(Exception $e){
    header('Location: ../../index.php?p=register&r=registererror');
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();
$conn->close();
header('Location: ../../index.php?p=login&r=registerok');
?>