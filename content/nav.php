<?php
session_start();
if(isset($_GET['p'])){
    $page = $_GET['p'];
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if((isset($_GET['p']) && $page=="home") || !isset($_GET['p'])) echo "active";?>" aria-current="page" href="index.php?p=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="courses") echo "active";?>" href="index.php?p=courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="contact") echo "active";?>" href="index.php?p=contact">Contact</a>
                </li>

                <?php if(!isset($_SESSION["email"])){?>

                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="register") echo "active";?>" href="index.php?p=register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="login") echo "active";?>" href="index.php?p=login">Login</a>
                </li> 

                <?php } else { ?>
                    <?php if($_SESSION['usertype_id'] == 1) {?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="administration") echo "active";?>" href="index.php?p=administration">Administration</a>
                </li>
                    <?php } ?>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="account") echo "active";?>" href="index.php?p=account">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($_GET['p']) && $page=="logout") echo "active";?>" href="index.php?p=logout">Logout</a>
                </li>
                
                <?php }?>

            </ul>
        </div>
    </div>
</nav>