<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

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

    li .bu {
      border-style: solid;
      padding: 10px;
      background-color: #fcc0ae;
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


    /* the card css */

    .main {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 50px;
    }

    .card {
      width: 325px;
      margin: 20px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      background-color: #eee;
      overflow: hidden;
    }

    .card img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      color: #000;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .card-content p {
      color: #5d5d5d;
      font-size: 16px;
      margin-bottom: 15px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: white;
      border-style: solid;
      color: #000;
      border-radius: 4px;
      text-decoration: none;
      transition: o.4s;
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


    @media (max-width: 880px) {
      .footer-distributed .footer-left,
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
        <li><a href="book.php" class="bu">Book NOW</a></li>
      </div>
    </ul>
  </nav>

  <body>
    <div class="main">
      <div class="container">
        <div class="card">
          <img src="img\about_img.jpg">
          <div class="card-content">
            <h3>Menu Item</h3>
            <p>Here I am gonna put the description of the item in the food menu.</p>
            <a href="" class="button">Rs. 2000</a>
          </div>
        </div>
        <div class="card">
          <img src="img\about_img.jpg">
          <div class="card-content">
            <h3>Menu Item</h3>
            <p>Here I am gonna put the description of the item in the food menu.</p>
            <a href="" class="button">Rs. 2000</a>
          </div>
        </div>
        <div class="card">
          <img src="img\about_img.jpg">
          <div class="card-content">
            <h3>Menu Item</h3>
            <p>Here I am gonna put the description of the item in the food menu.</p>
            <a href="" class="button">Rs. 2000</a>
          </div>
        </div>
      </div>
    </div>


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

  </body>

</html>
