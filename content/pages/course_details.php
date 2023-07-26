<?php
$id = $_GET['id'];
include('db/course/selectbyid.php');
?>
<h1>Course Details</h1>
<div class="container">
    <form action="db/course/update.php" method="post">
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_id">ID:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="number" name="course_details_number" id="course_details_number" value="<?= $row['id'] ?>" readonly>
            </div>
        </div>
        <div class="col">
            <label class="form-label" for="course_details_name">Name:</label>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="text" name="course_details_name" id="course_details_name" value="<?= $row['name'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_description">Description:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="text" name="course_details_description" id="course_details_description" value="<?= $row['description'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_length">Length:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="number" name="course_details_length" id="course_details_length" value="<?= $row['length'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_image">Image:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="row">
                    <div class="col-1">
                        <?php if ($row['image'] == "") { ?>
                            <img class="img_table" src="img/courses/default.png" alt="">
                        <?php } else { ?>
                            <img class="img_table" src="img/courses/<?= $row['image'] ?>" alt="">
                        <?php } ?>
                    </div>
                    <div class="col">
                        <input class="form-control" type="file" name="course_details_image" id="course_details_image">
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_keywords">Keywords:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="text" name="course_details_keywords" id="course_details_keywords" value="<?= $row['keywords'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_cathegory">Cathegory:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="text" name="course_details_cathegory" id="course_details_cathegory" value="<?= $row['cathegory'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_price">Price:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <input class="form-control" type="number" name="course_details_price" id="course_details_price" value="<?= $row['price'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label" for="course_details_visibility">Visibility:</label>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <select class="form-select" name="course_details_visibility" id="course_details_visibility">
                    <option value="1" <?php if ($row['visibility'] == 1) echo "selected"; ?>>Visible</option>
                    <option value="0" <?php if ($row['visibility'] == 0) echo "selected"; ?>>Not Visible</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="index.php?p=administration" class="btn btn-danger me-2">Cancel</a>
                <button class="btn btn-success">Save</button>
            </div>
            <div class="col text-end"><a href="db/course/delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></div>
        </div>
    </form>