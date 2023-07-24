<?php
include('db/conn.php');

$sql = "SELECT * FROM course;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="container">
        <div class="row border">
            <div class="col text-center mb-1 text-white bg-dark"></div>
            <div class="col text-center mb-1 text-white bg-dark">ID</div>
            <div class="col text-center mb-1 text-white bg-dark">NAME</div>
            <div class="col text-center mb-1 text-white bg-dark">DESCRIPTION</div>
            <div class="col text-center mb-1 text-white bg-dark">LENGTH</div>
            <div class="col text-center mb-1 text-white bg-dark">IMAGE</div>
            <div class="col text-center mb-1 text-white bg-dark">KEYWORDS</div>
            <div class="col text-center mb-1 text-white bg-dark">CATHEGORY</div>
            <div class="col text-center mb-1 text-white bg-dark">PRICE</div>
            <div class="col text-center mb-1 text-white bg-dark">VISIBILITY</div>
        </div>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row border">
                <div class="col text-center mb-1"><a href="index.php?p=course_details&id=<?= $row['id'] ?>" class="btn btn-primary">SELECT</a></div>
                <div class="col text-center mb-1"><?= $row['id'] ?></div>
                <div class="col text-center mb-1"><?= $row['name'] ?></div>
                <div class="col text-center mb-1">
                    <?php 
                    if(strlen($row['description'])>10) {
                        echo substr($row['description'],0,10)."...";
                     } else if(strlen($row['description'])>0) {
                        echo $row['description'];
                     } ?>
                </div>
                <div class="col text-center mb-1"><?= $row['length'] ?></div>
                <div class="col text-center mb-1">
                    <?php if ($row['image'] == "") { ?>
                        <img class="img_table" src="img/courses/default.png" alt="">
                    <?php } else { ?>
                        <img class="img_table" src="img/courses/<?=$row['image']?>" alt="">
                    <?php } ?>
                </div>
                <div class="col text-center mb-1">
                <?php 
                    if(strlen($row['keywords'])>10) {
                        echo substr($row['keywords'],0,10)."...";
                     } else if(strlen($row['keywords'])>0) {
                        echo $row['keywords'];
                     } ?>        
                </div>
                <div class="col text-center mb-1"><?= $row['cathegory'] ?></div>
                <div class="col text-center mb-1"><?= $row['price'] ?></div>
                <div class="col text-center mb-1">
                <?php if($row['visibility'] == 1){ ?>
                    <i class="fa-solid fa-eye"></i> 
                <?php }else{ ?>
                    <i class="fa-solid fa-eye-slash"></i>    
                <?php } ?>
                </div>
            </div>
        <?php }
        ?>
    </div>
<?php
}
$conn->close();
?>