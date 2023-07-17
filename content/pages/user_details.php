<?php 
$id = $_GET['id'];
include('db/user/selectbyid.php');
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
            <div class="col"><label class="form-label" for="user_details_email">Email:</label></div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input class="form-control" type="email" name="user_details_email" id="user_details_email" value="<?= $row['email']?>">
        </div>
    </div>

    <!-- COMPLETAR COM RESTANTES CAMPOS
            - USERNAME
            - BANNED
            - IMAGEM
            - USERTYPE



            NAS OPÇÕES ABAIXO ADICIONAR BOTÕES PARA:
            - RESET DA PASSWORD
            - BANIR UTILIZADOR
            - ALTERAR/REMOVER IMAGEM DO UTILIZADOR?
            - ALTERAR USERTYPE
    -->


    <div class="row">
        <div class="col">
            <a href="index.php?p=administration" class="btn btn-danger me-2">Cancel</a>
            <button class="btn btn-success">Save</button>
        </div>
        <div class="col text-end"><a href="db/user/admin_delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a></div>
    </div>
    </form>