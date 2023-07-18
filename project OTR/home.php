<?php
session_start();

$isLoggedIn = isset($_SESSION['name']);


	
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>Document</title>

  <!-- slider link css -->

  <!--<link rel="stylesheet" href="js/swiper-bundle.min.css" />-->

  <style>
    /* UTILITIES */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Lucida Console", "Courier New", monospace;
    }

    a {
      text-decoration: none;
    }

    li {
      list-style: none;
    }

    /* NAVBAR STYLING STARTS */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      background-color: white;
      color: #000;
    }

    .nav-links a {
      color: black;
    }

    /* LOGO */
    .logo {
      font-size: 32px;
      color: #000;
    }

    /* NAVBAR MENU */
    .menu {
      display: flex;
      gap: 1em;
      font-size: 18px;
    }

    

    .menu li {
      padding: 5px 10px;
    }
    
    li .bu {
      border-style: solid;
      padding: 10px;
      background-color: #fcc0ae;
    }


    /* body css */

    .main_body {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .section {
      width: 100%;
      min-height: 100vh;
      
    }

    .container {
      width: 80%;
      display: block;
      margin: auto;
      padding-top: 100px;
    }

    .container-section {
      float: left;
      width: 55%;
    }

    .image-section {
      float: right;
      width: 40%;
    }

    .image-section img {
      width: 100%;
      height: auto;
    }

    .container-section .title {
      text-transform: uppercase;
      font-size: 28px;
    }
    .container-section .content p {
      margin-top: 10px;
      font-family: sans-serif;
      font-size: 18px;
      line-height: 1.5;
    }

    .container-section .content .button {
      margin-top: 30px;
    }

    .container-section .content .button a {

      background-color: white;
      border-style: solid;
      padding: 12px 40px;
      text-decoration: none;
      color: #000;
      font-size: 25px;
      letter-spacing: 1.5px;
    }

    

    @media screen and (max-width: 768px) {
      .container {
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
      }

      .container-section {
        float: none;
        width: 100%;
        display: block;
      }

      .image-section {
        float: none;
        width: 100%;
        display: block;
        margin: auto;
      }

      .image-section img {
        width: 100%;
        height: auto;
      }

      .container-section .title {
        text-align: center;
        font-size: 19px;
      }

      .container-section .content .button {
        text-align: center;
      }

      .container-section .content .button a {
        padding: 9px 30px;
      }
    }


    .container .title h1::after {
      content: "";
      height: 6px;
      width: 180px;
      background-color: #222;
      border-radius: 6px;
      position: absolute;
      display: block;
      margin: auto;
    }

    /* footer css */

    .footer-distributed {
      background-color: #2d2a30;
      box-sizing: border-box;
      widows: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 50px 50px 60px 50px;
      margin-top: 80px;
    }

   
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
      display: inline-block;
      vertical-align: top;
    }

    

     .footer-distributed h3 {
      color: #fff;
      font: normal 36px ;
      margin: 0;
    }

    

    .footer-distributed .footer-center {
      width: 35%;
    }

    .footer-distributed .footer-center i {
      background-color: #33383b;
      color: #fff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }


    .footer-distributed .footer-center p {
      display: inline-block;
      color: #fff;
      vertical-align: middle;
      margin: 0;
    }

    .footer-distributed .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }

    .footer-distributed .footer-center p a {
      color: #e0ac1a;
      text-decoration: none;
    }

    .footer-distributed .footer-right {
      width: 30%;
    }

    .footer-distributed .footer-company-about {
      line-height: 20px;
      color: #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer-distributed .footer-company-about span {
      display: block;
      color: #ffffff;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer-links a:hover {
      color: #3F71EA;
    }

    @media (max-width: 880px) {

      .footer-distributed .footer-center,
      .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }

      .footer-distributed .footer-center i {
        margin-left: 0;
      }
    } 

    /* css for the slider menu */

    .sub-main {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    .sub-sec {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #efefef;
    }

    .container_one {
      width: 100%;
      background-color: grey;
    }

    .card {
      width: 3px;
      background-color: #fff;
      border-radius: 8px;
    }

    .card .image-box {
      height: 200px;
    }

    .card .image-box img {
      height: 100%;
      border-radius: 8px 8px 0 0;
    }

    .card .profile-details {
      display: flex;
      align-items: center;
      column-gap: 12px;
      padding: 15px;
    }

    .card .profile-details img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
    }

    .profile-details .name {
      font-size: 15px;
      font-weight: 500;
    }

    .profile-details .job {
      font-size: 12px;
      font-weight: 400;
      color: #4d4d4d;
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Cherry Bloom</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="book.php" class="bu">Book Table</a></li>
        <?php if ($isLoggedIn): ?>
                      <li class="logout">
                          <a href="user_logout.php">Logout</a>
			                 
                                   </li>
                             <?php else: ?>
                            <li class="nav-item">
                              <a href="user_login.php">Login</a>
			
                            </li>
                              <?php endif; ?>
      </div>
    </ul>
  </nav>

  <!-- this is the main body of the page -->
  <div class="main_body">
    <div class="section">
      <div class="container">
        <div class="container-section">
          <div class="title">
            <h1>Explore</h1>
          </div>
          <div class="content">
          <p>We are a multi-cuisine restaurant offering a wide variety of food experience in both casual and fine dining environment.</p>
            <div class="button">
              <a href="book.php">Book Table</a>
            </div>
          </div>
        </div>
        <div class="image-section">
          <img src="img\image_1.jpg">
        </div>
      </div>
    </div>
  </div>

  <!-- displaying the offer page in the home page -->



  <!-- this is the footer of the page -->

  <footer class="footer-distributed">

      

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Lalitpur,</span> Nepal</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>+977 981234567</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="">cherrybloom@gmail.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the Company</span>
        <strong>Cherry Bloom</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, tempore?
      </p>
    </div>
  </footer>



  <!-- script -->

  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".slide-container", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>