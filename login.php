<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Heritage Tours</title>
  <link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>
<nav class="zone blue sticky">
        <ul class="main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Booking</a></li>
            <div class="dropdown">
            <li><a href="#">What To Do ↓</a></li>              
                <div class="dropdown-content">
                  <a href="museums.html">Museums</a>
                  <a href="#">Shopping</a>
                  <a href="#">Restaurants</a>
                  <a href="attractions.html">Attractions</a>
                </div>
            </div>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
  <div class="container">
    <img class="cover" src="img/cover.jpg">
    <div class="coverText">
      <h1>Heritage Tours</h1>
    </div>
  </div>
  <div class="zone blue grid-wrapper">
    <div class="card zone">
      <img src="img/photos-by-beks-sXCMNX0LJHU-unsplash.jpg">
    </div>
    <div class="card zone">
      <div class="text">
        <h1>Log In</h1>
        <form method="post" action="login.php">
          <?php include('php/errors.php'); ?>
          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password">
          </div>
          <div class="form-group">
            <label>
              <input type="checkbox"> Remember Password</label>
          </div>
          <button type="submit" name="login_user">Login</button>
          <a href="register.php">Register an Account</a>
        </form>
      </div>
    </div>
  </div>
  <footer class="zone">
    <p>Heritage Tours 2020</p>
  </footer>
</body>
</html>