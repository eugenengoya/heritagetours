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
        <h1>Register</h1>
        <form method="post" action="register.php">
          <?php include('php/errors.php'); ?>
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input class="form-control" id="exampleInputName" type="text" name="name" value="<?php echo $name; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password_1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input class="form-control" id="exampleInputPassword2" type="password" name="password_2">
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  <footer class="zone">
    <p>2020</p>
  </footer>
</body>
</html>