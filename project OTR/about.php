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


    .main {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      background-color: #dee0e3;
    }

    .heading {
      text-align: center;
      margin-top: 25px;
    }

    .heading h1 {
      font-size: 50px;
      color: #36455c;
      margin-bottom: 10px;
    }

    .heading p {
      font-size: 20px;
      color: #666;
      margin-bottom: 50px;
    }

    .about-us {
      display: flex;
      align-items: center;
      width: 85%;
      margin: auto;
    }

    .about-us img {
      flex: 0 50%;
      max-width: 50%;
      height: auto;
    }

    .content {
      padding: 35px;
    }

    .content h2 {
      color: #36455c;
      font-size: 24px;
      margin: 15px 0px;
    }

    .content p {
      color: #666;
      font-size: 18px;
      line-height: 1.5;
      margin: 15px 0px;
    }

    .read-more-btn {
      display: inline-block;
      color: #fff;
      background-color: #0084ff;
      border: none;
      border-radius: 5px;
      padding: 12px 20px;
      font-size: 18px;
      cursor: pointer;
      transition: 0.2s;
    }

    .read-more-btn:hover {
      background-color: #006dd6;
    }

    @media (max-width: 768px) {
      .about-us {
        flex-direction: column;
      }

      .about-us img {
        flex: 0 100%;
        max-width: 100%;
      }

      .content {
        flex: 0 100%;
        max-width: 100%;
        padding: 15px;
      }
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

  <div class="main">
    <div class="heading">
      <h1>About Page</h1>
      <p>CHERRY BLOSSOM - QUALITY FOOD QUALITY LIFE</p>
    </div>
    <setion class="about-us">
      <img src="img\about_img.jpg">
      <div class="content">
        <h2>DETAILS</h2>
        <p>Restaurant chain known for its fried chicekn and special offer meals and sides. <br></br>
          Highlights
          - Fast service
        </p>
        <button class="read-more-btn">Read More</button>
      </div>
      <div></div>
    </setion>
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