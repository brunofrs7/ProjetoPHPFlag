<?php
if(isset($_GET['p'])){
    $page = $_GET['p'];

    if($page == "home")                                         include('content/pages/home.php');
    else if($page == "courses")                                 include('content/pages/courses.php');
    else if($page == "contact")                                 include('content/pages/contact.php');
    else if($page == "login"    && !isset($_SESSION['email']))  include('content/pages/login.php');
    else if($page == "register" && !isset($_SESSION['email']))  include('content/pages/register.php');
    else if($page == "account"  &&  isset($_SESSION['email']))  include('content/pages/account.php');
    else if($page == "logout"   &&  isset($_SESSION['email']))  include('content/pages/logout.php');
    else if($page == "administration" 
                    && isset($_SESSION['usertype_id']) 
                    && $_SESSION['usertype_id'] == 1)           include('content/pages/administration.php');
    else                                                        include('content/pages/404.php');
}else{
    include('content/pages/home.php');
}