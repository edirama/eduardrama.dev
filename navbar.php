<nav class="navbar" id="navbar">
        <img src="./images/logo.png" class="logo" />
        <ul class="navbar--list">
          <li class="navbar--item">
            <a href="./index.php" class="navbar--link">HOME</a>
          </li>
          <li class="navbar--item">
            <a href="./index.php?#about" class="navbar--link">ABOUT</a>
          </li>
          <li class="navbar--item">
            <a href="./index.php?#my--works" class="navbar--link">WORKS</a>
          </li>
          <li class="navbar--item">
            <a href="./index.php?#contact" class="navbar--link">CONTACT</a>
          </li>
          <?php 
            if(isset($_SESSION['username'])) {
          ?>
          <li class="navbar--item">
            <a href="./logic/logout.php" class="navbar--link">LOGOUT</a>
          </li>
          <?php
            } else {
          ?>
          <li class="navbar--item">
            <a href="login.php" class="navbar--link">LOGIN</a>
          </li>
          <?php
            }
          ?>
        </ul>
        <div class="header--bars">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </nav>