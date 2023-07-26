<?php
$name = $_POST['new_course_name'];
$description = $_POST['new_course_description'];
$length = $_POST['new_course_length'];
$keywords = $_POST['new_course_keywords'];
$cathegory = $_POST['new_course_cathegory'];
$price = $_POST['new_course_price'];
$visibility = $_POST['new_course_visibility'];

include('../conn.php');

$sql = "INSERT INTO course (name, description, length, keywords, cathegory, price, visibility)
 VALUES ('$name', '$description', $length, '$keywords', '$cathegory', $price, $visibility)";


if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;
    $imageName = 'c' . $id . '.png';

    $sql1 = "UPDATE course SET image = '$imageName' WHERE id = $id";
    if ($conn->query($sql1) === TRUE) {
        include('../../services/uploadCourseImage.php');
        header('Location: ../../index.php?p=administration&r=insertok');
    }
} else {
    header('Location: ../../index.php?p=administration&r=inserterror');
}
$conn->close();
