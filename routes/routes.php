<?php
if(isset($_GET['p'])){
    $page = $_GET['p'];

    if($page == "home")           include('content/pages/home.php');
    else if($page == "courses")   include('content/pages/courses.php');
    else if($page == "login")     include('content/pages/login.php');
    else if($page == "register")  include('content/pages/register.php');
    else                          include('content/pages/404.php');
}else{
    include('content/pages/home.php');
}