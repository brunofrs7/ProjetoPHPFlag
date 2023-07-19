<?php
include('db/conn.php');

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="container">
        <div class="row border">
            <div class="col text-center mb-1 text-white bg-dark"></div>
            <div class="col text-center mb-1 text-white bg-dark">ID</div>
            <div class="col text-center mb-1 text-white bg-dark">EMAIL</div>
            <div class="col text-center mb-1 text-white bg-dark">USERNAME</div>
            <div class="col text-center mb-1 text-white bg-dark">LAST LOGIN</div>
            <div class="col text-center mb-1 text-white bg-dark">BANNED</div>
            <div class="col text-center mb-1 text-white bg-dark">IMAGE</div>
            <div class="col text-center mb-1 text-white bg-dark">USERTYPE</div>
        </div>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row border">
                <div class="col text-center mb-1"><a href="index.php?p=user_details&id=<?= $row['id'] ?>" class="btn btn-primary">SELECT</a></div>
                <div class="col text-center mb-1"><?= $row['id'] ?></div>
                <div class="col text-center mb-1"><?= $row['email'] ?></div>
                <div class="col text-center mb-1"><?= $row['username'] ?></div>
                <div class="col text-center mb-1"><?= $row['last_login'] ?></div>
                <div class="col text-center mb-1"><?= $row['banned'] ?></div>
                <div class="col text-center mb-1">
                    <?php if ($row['image'] == "") { ?>
                        <img class="img_table" src="img/default.png" alt="">
                    <?php } else { ?>
                        <img class="img_table" src="img/users/<?=$row['image']?>" alt="">
                    <?php } ?>
                </div>
                <div class="col text-center mb-1"><?= $row['usertype_id'] ?></div>
            </div>
        <?php }
        ?>
    </div>
<?php
}
$conn->close();
?>