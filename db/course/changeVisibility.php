<?php
$id = $_GET['id'];
$visibility = $_GET['v'];

include('../conn.php');

$sql = "UPDATE course SET visibility=$visibility WHERE id=$id;";

if ($conn->query($sql) === TRUE) {
    header('Location: ../../index.php?p=administration&r=updatevisibilityok');
} else {
    header('Location: ../../index.php?p=administration&r=updatevisibilityerror');
}
$conn->close();
