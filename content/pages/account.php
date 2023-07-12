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
            <div class="row">
                <div class="col"><label class="form-label" for="email">Email:</label></div>
            </div>
            <div class="row">
                <div class="col"><input class="form-control" type="email" name="email" id="email" 
                value="<?= $row['email']?>"></div>
            </div>
            <div class="row mt-2">
                <div class="col"><label class="form-label" for="username">Username:</label></div>
            </div>
            <div class="row">
                <div class="col"><input class="form-control" type="text" name="username" id="username" value="<?= $row['username']?>"></div>
            </div>
            <div class="row mt-2">
                <div class="col"><label class="form-label" for="username">Password:</label></div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="form-control" type="password" name="password" id="password" value="***********">
                </div>
            </div>
            <div class="row account_confirm_password mt-2">
                <div class="col"><label class="form-label" for="username">Confirm Password:</label></div>
            </div>
            <div class="row account_confirm_password">
                <div class="col">
                    <input class="form-control" type="password" name="password1" id="password1">
                </div>
            </div>
            <div class="row mt-2" id="account_edit">
                <div class="col">
                    <button class="btn btn-secondary" onclick="edit()">Edit</button>
                </div>
            </div>
            <div class="row mt-2" id="account_cancel_save">
                <div class="col">
                    <a href="index.php?p=account" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>