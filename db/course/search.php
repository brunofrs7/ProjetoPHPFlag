<?php
include('db/conn.php');
$keyword = $_POST['keyword'];
$sql = "SELECT * FROM course WHERE visibility = 1 AND (name LIKE '%$keyword%' OR description LIKE '%$keyword%' OR keywords LIKE '%$keyword%' OR cathegory LIKE '%$keyword%' OR price LIKE '%$keyword%'); ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div class="card mx-auto" style="width: 18rem;">
                <?php if ($row['image'] == "") { ?>
                    <img src="img/courses/default.png" alt="">
                <?php } else { ?>
                    <img src="img/courses/<?= $row['image'] ?>" alt="">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $row['name'] ?></h5>
                    <div class="row">
                        <div class="col"><?= $row['cathegory'] ?></div>
                        <div class="col text-end">Price: 
                        <?php if ($row['price'] == 0) {
                            echo "Free";
                        } else {
                            echo $row['price'];
                        } ?>
                        </div>
                    </div>
                    <hr>
                    <p class="card-text"><?= $row['description'] ?></p>
                    <p class="card-text"><?= $row['keywords'] ?></p>
                    <div class="row">
                        <div class="col"><a href="#" class="btn btn-primary">More...</a></div>
                        <div class="col text-end"><a href="#" class="btn btn-primary">Enroll</a></div>
                    </div>

                </div>
            </div>
        </div>
    <?php }
    ?>
    </div>
<?php
}
$conn->close();
?>