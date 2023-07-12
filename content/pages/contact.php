<form action="services/send_email.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Insert your email" value="
        <?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];} ?>">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <input class="btn btn-secondary" type="submit" value="Send">
    </div>
</form>

<?php 
if(isset($_GET["r"])){
    $r = $_GET["r"];
    if($r == "ok"){
        //MOSTRAR ALERT: Message has been sent
        echo 
        '<div class="alert alert-success" role="alert">
            Message has been sent
        </div>';
       
    }else if($r == "error"){
        //MOSTRAR ALERT: Error sending message, try again later
        ?>
        <div class="alert alert-danger" role="alert">
            Error sending message, try again later
        </div>
        <?php
    }
}?>