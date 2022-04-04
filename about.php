<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || ART E-COMMERCE</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"><b>ART COLLAB<b></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">collections</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
    


   <center> <img data-interchange="[images/images.jpg, (retina)], [images/images.jpg, (large)], [images/images.jpg, (mobile)], [images/images.jpg, (medium)]"></center>
    <div class="row" style="margin-top:40px;">
    
      <div class="small-13">
     
   
        <p>ART COLLAB is a project on E-Commerce Website. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit
        <a href="https://www.vogue.in/culture-and-living/content/25-must-visit-art-exhibits-in-and-around-india-you-need-to-check-out" target="_blank" rel="noopener noreferrer" title="Tech Barrack Solutions">art foundation</a>.</p>

        <p>Why ART COLLAB? Art is a peaceful way to express one's talent, ideas, feelings and talents. Art is also a decorum of decency and beauty.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; ART traders INC.ltd.</p>
        </footer>
    
      </div>
    </div>
    <noscript><img src="images/sun.jpg"></noscript>
    







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
