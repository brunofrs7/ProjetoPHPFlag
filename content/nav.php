<?php
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
                    <a class="nav-link <?php if($page=="home") echo "active";?>" aria-current="page" href="index.php?p=home">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="courses") echo "active";?>" href="index.php?p=courses">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="register") echo "active";?>" href="index.php?p=register">Registo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="login") echo "active";?>" href="index.php?p=login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>