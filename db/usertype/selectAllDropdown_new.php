<?php
include('db/conn.php');

$sql = "SELECT * FROM usertype";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row1 = $result->fetch_assoc()) {
?>
        <option value="<?= $row1['id'] ?>"><?= $row1['name'] ?></option>
<?php
    }
}
$conn->close();
?>