<?php
include('db/conn.php');

$sql = "SELECT * FROM usertype";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row1 = $result->fetch_assoc()) {
        ?>
            <option value="<?= $row1['id']?>"
            <?php 
            // permite selecionar o name do usertype marcado
                if($row1['id'] == $row['usertype_id']) echo "selected";
            ?>><?= $row1['name']?></option>
        <?php
    }
}
$conn->close();
?>