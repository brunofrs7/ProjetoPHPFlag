<?php
include('db/conn.php');

$sql = "SELECT * FROM usertype";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <div class="container">
            <div class="row border">
                <div class="col text-center mb-1 text-white bg-dark"></div>    
                <div class="col text-center mb-1 text-white bg-dark">ID</div>
                <div class="col text-center mb-1 text-white bg-dark">NAME</div>
            </div>
    <?php
    while($row = $result->fetch_assoc()) {?>
            <div class="row border">
                <div class="col text-center mb-1"><a href="index.php?p=usertype_details&id=<?=$row['id']?>" class="btn btn-primary">SELECT</a></div>
                <div class="col text-center mb-1"><?=$row['id']?></div>
                <div class="col text-center mb-1"><?=$row['name']?></div>
            </div>
<?php
    }
    ?>
        </div>
    <?php
}
$conn->close();
?>