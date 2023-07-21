<?php

$name = $_POST['new_usertype_name'];

include('../conn.php');

    $stmt = $conn->prepare("INSERT INTO usertype (name) VALUES (?)");
$stmt->bind_param("s", $name);

if ($stmt->execute() === TRUE) {
    header('Location: ../../index.php?p=administration&r=insertok');
} else {
    header('Location: ../../index.php?p=administration&r=inserterror');
}

$stmt->close();
$conn->close();
?>