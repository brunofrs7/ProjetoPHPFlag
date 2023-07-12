<?php 
$id = $_GET['id'];
include('db/usertype/selectbyid.php');
?>
<h1>Usertype Details</h1>
<div class="container">
    <form action="db/usertype/update.php" method="post">
    <div class="row">
        <div class="col">
            <label class="form-label" for="usertype_details_id">ID:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="number" name="usertype_details_id" id="usertype_details_id" value="<?= $row['id']?>" readonly>
        </div>
    </div>
    <div class="row">
            <div class="col"><label class="form-label" for="usertype_details_name">Name:</label></div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="text" name="usertype_details_name" id="usertype_details_name" value="<?= $row['name']?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="index.php?p=administration" class="btn btn-danger me-2">Cancel</a>
            <button class="btn btn-success">Save</button>
        </div>
        <div class="col text-end"><a href="db/usertype/delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a></div>
    </div>
    </form>
</div>
