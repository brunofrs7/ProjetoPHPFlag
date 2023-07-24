<div class="row">
    <div class="col"><h1>Usertype</h1></div>
    <div class="col text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInsertUsertype">
            New Usertype
        </button>
    </div>
    <?php include('insertModal/modalInsertUsertype.php') ?>
</div>
<?php include('db/usertype/selectAll.php')?>
<hr>
<div class="row">
    <div class="col"><h1>User</h1></div>
    <div class="col text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInsertUser">
            New User
        </button>
    </div>
    <?php include('insertModal/modalInsertUser.php') ?>
</div>
<?php include('db/user/selectAll.php')?>
<hr>
<div class="row">
    <div class="col"><h1>Course</h1></div>
    <div class="col text-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInsertCourse">
            New Course
        </button>
    </div>
    <?php include('insertModal/modalInsertCourse.php') ?>
</div>
<?php include('db/course/selectAll.php')?>
<hr>