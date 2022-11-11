<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eduard Rama</title>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>
  <?php
    include './navbar.php';
  ?>
  <div class='form--body'>
    <form action='./logic/login-logic.php' method='POST'  class='login-form form'>
      <i class="fa-solid fa-user"></i>
      <div class="login--content">
        <div class="username--field">
          <!-- <label for="username" class='label label--active2'>Enter Username</label> -->
          <input type="text" name="username" placeholder="Enter Username" id="username">
        </div>
        <div class="password--field">
          <!-- <label for="password" class='label label--active2'>Enter Password</label> -->
          <input type="password" name="password" placeholder="Enter Password" id="password">
        </div>
      </div>
      <div class="login--footer">
        <p>
          <span>
            Don't have an account?
            <a href="register.php">Register here</a>
          </span>
          <span>
            <a href="#">Forgot password</a>
          </span>
        </p>
        <button type="submit" name='login--btn' class='btn btn--login'><div class="btn--overlay"></div>
              <span>Login</span></button>
      </div>
    </form>
  </div>
  <?php
    include './contact.php';
  ?>
  <script src="js/index.js"></script>
  <script
    src="https://kit.fontawesome.com/d3583e2956.js"
    crossorigin="anonymous"
  ></script>
</body>
</html>