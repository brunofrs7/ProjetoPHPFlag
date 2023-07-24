<h1>Login</h1>
<form action="db/user/login.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Insert your email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="keepLoggedIn" name="keepLoggedIn">
    <label class="form-check-label" for="keepLoggedIn">Check me out</label>
  </div>
  <button type="submit" class="btn btn-secondary">Login</button>
  <br>
  <a href="index.php?p=register">Don't have an account? Sign up here!</a>
  <br>
  <a href="index.php?p=recover">Recover Password</a>
</form>