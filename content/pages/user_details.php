<?php 
$id = $_GET['id'];
include('db/user/selectbyidGET.php');
?>
<h1>User Details</h1>
<div class="container">
    <form action="db/user/admin_update.php" method="post">
    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_id">ID:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="number" name="user_details_id" id="user_details_id" value="<?= $row['id']?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_email">Email:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="email" name="user_details_email" id="user_details_email" value="<?= $row['email']?>">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_username">Username:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="text" name="user_details_username" id="user_details_username" value="<?= $row['username']?>">
        </div>
    </div>
    <!-- BANNED -->
    <?php if ($row['banned'] != "") { ?>
    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_banned">Banned:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="datetime-local" name="user_details_banned" id="user_details_banned" value="<?= $row['banned']?>" readonly>
        </div>
    </div>
    <?php } ?>
    <!-- IMAGE -->
    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_image">Image:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <?php if ($row['image'] == "") { ?>
                <img class="img_table" src="img/default.png" alt="">
            <?php } else { ?>
                <img class="img_table" src="img/users/<?=$row['image']?>" alt="">
            <?php } ?>
        </div>
    </div>
    <!-- USERTYPE -->
    <div class="row">
        <div class="col">
            <label class="form-label" for="user_details_usertype">Usertype:</label>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <select class="form-select" name="user_details_usertype" id="user_details_usertype">
                <?php include('db/usertype/selectAllDropdown.php')?>
            </select>
        </div>
    </div>

    <?php
    if($id != $_SESSION['id']) {?>
    <div class="row">
        <div class="col-2">
            <a href="index.php?p=administration" class="btn btn-danger me-2">Cancel</a>
            <button class="btn btn-success">Save</button>
        </div>
        <div class="col text-center">
            <a href="db/user/resetPassword.php?id=<?= $row['id']?>&email=<?= $row['email']?>" class="btn btn-danger">Reset password</a>
            <a href="db/user/resetUserImage.php?id=<?= $row['id']?>" class="btn btn-primary mx-3">Reset user image</a>
            <!-- BAN -->
            <?php if ($row['banned'] == "") { ?>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ban user
            </button>
            <?php } else { ?>
            <a href="db/user/banRemove.php?id=<?= $row['id']?>" class="btn btn-warning">Remove ban</a>
            <?php } ?>
        </div>
        <div class="col-2 text-end"><a href="db/user/admin_delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a></div>
    </div>
    <?php } ?>
    </form>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="db/user/ban.php" method="post">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ban user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" name="user_details_new_ban_id" id="user_details_new_ban_id" value="<?= $row['id']?>">
                <div class="row mb-2">
                    <div class="col">
                        <input class="form-control" type="datetime-local" name="user_details_new_ban" id="user_details_new_ban" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Ban</button>
            </div>
        </form>
    </div>
  </div>
</div>