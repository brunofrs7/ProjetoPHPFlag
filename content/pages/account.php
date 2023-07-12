<h1>Welcome, 
<?php 
include('db/user/selectbyid.php');
echo $row['username'];
?>
</h1>
<!-- div.container-fluid>div.row>div.col*2 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 text-center">
            <img src="img/default.png" alt=""><br>
            <button class="btn btn-secondary mt-2">Change image</button>
        </div>
        <div class="col-12 col-md-6">
            <form action="db/user/update.php" method="post">
                <div class="row">
                    <div class="col"><label class="form-label" for="email">Email:</label></div>
                </div>
                <div class="row">
                    <div class="col"><input class="form-control" type="email" name="account_email" id="account_email" 
                    value="<?= $row['email']?>"></div>
                </div>
                <div class="row mt-2">
                    <div class="col"><label class="form-label" for="username">Username:</label></div>
                </div>
                <div class="row">
                    <div class="col"><input class="form-control" type="text" name="account_username" id="account_username" value="<?= $row['username']?>"></div>
                </div>
                <div class="row mt-2">
                    <div class="col"><label class="form-label" for="username">Password:</label></div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="password" name="account_password" id="account_password" value="***********">
                    </div>
                </div>
                <div class="row mt-2" id="account_confirm_password">
                    <div class="col"><label class="form-label" for="username">Confirm Password:</label></div>
                </div>
                <div class="row" id="account_confirm_password1">
                    <div class="col">
                        <input class="form-control" type="password" name="account_password1" id="account_password1">
                    </div>
                </div>
                <div class="row mt-2" id="account_edit">
                    <div class="col">
                        <a class="btn btn-secondary" onclick="edit()">Edit</a>
                        <?php if($_SESSION['usertype_id'] != 1) { ?>
                        <a href="db/user/delete.php" class="btn btn-danger ms-5">Delete account</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mt-2" id="account_cancel_save">
                    <div class="col">
                        <a href="index.php?p=account" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>