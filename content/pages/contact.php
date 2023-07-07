<form action="services/send_email.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Insert your email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <input class="btn btn-secondary" type="submit" value="Send">
    </div>
</form>