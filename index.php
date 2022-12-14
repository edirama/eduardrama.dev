<?php
  session_start();
?>
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
    <header class="header" id="header">
      <?php
        include './navbar.php';
      ?>
      <section class="header--section">
        <img src="./images/me.png" alt="Eduard Rama" class="meImg" id="meImg" />
        <div class="header--content">
          <h1 class="header--content-heading">
            Hi I'm <span class="myName">Eduard Rama</span>
          </h1>
          <p class="header--content-paragraph">Fullstack Development</p>
          <a href="#about" class="read--more btn"
            ><div class="btn--overlay"></div>
            <span>Read More</span></a
          >
        </div>
      </section>
    </header>
    <main>
      <section class="about" id="about">
        <div class="about--title">
          <h1>About Ed</h1>
          <h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem iusto
            voluptates amet sint, cumque officia iure aliquid perferendis natus
            ipsam atque ducimus consectetur quibusdam ex commodi neque dolore.
            Ipsam, cum!
          </h3>
        </div>

        <div class="slider">
          <div class="about--skills slide slide--1">
            <h3>Skills</h3>
            <div class="html skill">
              <h4>Html</h4>
              <p>Advanced level</p>
            </div>
            <div class="css skill">
              <h4>CSS</h4>
              <p>Advanced level</p>
            </div>
            <div class="js skill">
              <h4>JavaScript</h4>
              <p>Advanced level</p>
            </div>
            <div class="php skill">
              <h4>PHP</h4>
              <p>Advanced level</p>
            </div>
            <div class="mysql skill">
              <h4>MySQL</h4>
              <p>Advanced level</p>
            </div>
          </div>

          <div class="about--experience slide slide--2">
            <h3>Experience</h3>
            <div class="freelancer experience">
              <h4>Freelancer</h4>
              <p>2019 - Mar 2022 <span>(about 3 years)</span></p>
            </div>
            <div class="genom experience">
              <h4>Genom Code <span>- District of Ferizaj, Kosovo</span></h4>
              <p>Mar 2022 - Sep 2022 <span>(7 months)</span></p>
            </div>
          </div>

          <div class="about--education slide slide--3">
            <h3>Education</h3>
            <div class="highSchool education">
              <h4>
                'Natural Sciences'
                <span>- District of Ferizaj, Kosovo</span>
              </h4>
              <p>Sep 2017 - Jun 2020 <span>(3 years)</span></p>
            </div>
            <div class="ubt education">
              <h4>
                'Computer Science and Engineering' - UBT
                <span>- District of Ferizaj, Kosovo</span>
              </h4>
              <p>Oct 2020 - Jun 2023</p>
            </div>
            <div class="digitalSchool education">
              <h4>
                'Digital School' <span>- District of Ferizaj, Kosovo</span>
              </h4>
              <p>Oct 2018 - Jun 2019 <span>(about 1 year)</span></p>
            </div>
          </div>

          <button class="slider__btn slider__btn--left">
            <i class="fa fa-chevron-left"></i>
          </button>
          <button class="slider__btn slider__btn--right">
            <i class="fa fa-chevron-right"></i>
          </button>
          <div class="dots"></div>
        </div>
      </section>

      <section class="my--works" id="my--works">
        <h1>My Work</h1>
        <div class="works">
          <div class="work ardi">
            <div class="about--work">
              <h3>ARDI NSHP</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="https://ardi-nshp.netlify.app/" target="_blank"
                ><i class="fa fa-share-from-square"></i
              ></a>
            </div>
          </div>
          <div class="work a6i">
            <div class="about--work">
              <h3>A6 & I Restaurant</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="http://www.a6irestaurant.com/" target="_blank"
                ><i class="fa fa-share-from-square"></i
              ></a>
            </div>
          </div>
          <div class="work zogu">
            <div class="about--work">
              <h3>Zogu Group</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="https://www.zogugroup.com/" target="_blank"
                ><i class="fa fa-share-from-square"></i
              ></a>
            </div>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="contact--socials">
          <h1>Contact Me</h1>
          <p>
            <i class="fa-solid fa-envelope"></i>
            <a href="#">ramaeduard4@gmail.com</a>
          </p>
          <p>
            <i class="fa-solid fa-square-phone"></i>
            <a href="#">+383 (0)45 450 673</a>
          </p>
          <div class="socials--links">
            <a href="https://www.instagram.com/eduarddr1_/" target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="https://www.facebook.com/eduard.b.rama/" target="_blank"
              ><i class="fa-brands fa-facebook"></i
            ></a>
            <a href="https://www.linkedin.com/in/eduard-rama/" target="_blank"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
          </div>
        </div>
        <form action="" class="contact--direct">
          <div class="fName">
            <label class="label" for="name">Enter your Name</label>
            <input type="text" name="name" id="name" class="input" />
          </div>
          <div class="email">
            <label class="label" for="email">Enter your Email</label>
            <input type="text" name="email" id="email" class="input" />
          </div>
          <div class="message">
            <label class="label textarea--label" for="message"
              >Enter your Message</label
            >
            <textarea name="message" id="message" class="textarea"></textarea>
          </div>
          <div class="submit--btn">
            <a href="#about" class="read--more btn send--message-btn"
              ><div class="btn--overlay"></div>
              <span>Send Message</span></a
            >
          </div>
        </form>
      </section>
    </main>
    <script src="js/index.js"></script>
    <script src="js/slider.js"></script>
    <script
      src="https://kit.fontawesome.com/d3583e2956.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
