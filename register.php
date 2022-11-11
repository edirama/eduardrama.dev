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
    <form action='./logic/register-logic.php' method='POST'  class='register-form form'>
    <i class="fa-solid fa-user-plus"></i>
      <div class="register--content">
        <div class="fName">
          <!-- <label for="fName" class='label label--active2'>Enter fName</label> -->
          <input type="text" name="fName" placeholder="Enter First Name" id="fName">
        </div>
        <div class="lName">
          <!-- <label for="lName" class='label label--active2'>Enter lName</label> -->
          <input type="text" name="lName" placeholder="Enter Last Name" id="lName">
        </div>
        <div class="email">
          <!-- <label for="email" class='label label--active2'>Enter email</label> -->
          <input type="text" name="email" placeholder="Enter Email">
        </div>
        <div class="username--field">
          <!-- <label for="username" class='label label--active2'>Enter Username</label> -->
          <input type="text" name="username" placeholder="Enter Username" id="username">
        </div>
        <div class="password--field">
          <!-- <label for="password" class='label label--active2'>Enter Password</label> -->
          <input type="password" name="password" placeholder="Enter Password" id="password">
        </div>
      </div>
      <div class="register--footer">
        <p>
          <span>
            Have an account?
            <a href="login.php">Login here</a>
          </span>
        </p>
        <button type="submit" name='register--btn' class='btn btn--register'><div class="btn--overlay"></div>
              <span>Register</span></button>
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