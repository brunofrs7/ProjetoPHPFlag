<?php

$id = $_POST['usertype_details_id'];
$name = $_POST['usertype_details_name'];

include('../conn.php');

$sql = "UPDATE usertype SET name='$name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=usertype_details&id='.$id.'&r=updateok');
} else {
    header('Location: ../../index.php?p=usertype_details&id='.$id.'&r=updateerror');
}

$conn->close();
?>