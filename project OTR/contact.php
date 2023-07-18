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

    /* this is the about page css*/
    .sub-main {
      min-height: 80vh;
      width: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      width: 85%;
      background: #fff;
      border-radius: 6px;
      padding: 20px 60px 30px 40px;
     border-style:solid;
     border-color:black;
    }

    .container .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .container .content .left-side {
      width: 25%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 15px;
      position: relative;
    }

    .content .left-side::before {
      content: '';
      position: absolute;
      height: 70%;
      width: 2px;
      right: -15px;
      top: 50%;
      transform: translateY(-50%);
      /* background: #afafb6; */
    }

    .content .left-side .details {
      margin: 14px;
      text-align: center;
    }

    .content .left-side .details i {
      font-size: 30px;
      color: #3e2093;
      margin-bottom: 10px;
    }

    .content .left-side .details .topic {
      font-size: 18px;
      font-weight: 500;
    }

    .content .left-side .details .text-one,
    .content .left-side .details .text-two {
      font-size: 14px;
      
    }

    .container .content .right-side {
      width: 75%;
      margin-left: 75px;
    }

    .content .right-side .topic-text {
      font-size: 23px;
      font-weight: 600;
      color: #000;
    }

    .right-side .input-box {
      height: 50px;
      width: 100%;
      margin: 12px 0;
    }

    .right-side .input-box input,
    .right-side .input-box textarea {
      height: 100%;
      width: 100%;
      border: none;
      outline: none;
      font-size: 16px;
      background: #F0F1F8;
      border-radius: 6px;
      padding: 0 15px;
      resize: none;
    }

    .right-side .message-box {
      min-height: 110px;
    }

    .right-side .input-box textarea {
      padding-top: 6px;
    }

    .right-side .submit {
      display: inline-block;
      margin-top: 12px;
    }

    .right-side .submit input[type="submit"] {
      color: #000;
      font-size: 18px;
      outline: none;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      background: #fcc0ae;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .submit input[type="submit"]:hover {
      background: #fcc0ae;
      border-style: solid;
    }

    @media (max-width: 950px) {
      .container {
        width: 90%;
        padding: 30px 40px 40px 35px;
      }

      .container .content .right-side {
        width: 75%;
        margin-left: 55px;
      }
    }

    @media (max-width: 820px) {
      .container {
        margin: 40px 0;
        height: 100%;
      }

      .container .content {
        flex-direction: column-reverse;
      }

      .container .content .left-side {
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
      }

      .container .content .left-side::before {
        display: none;
      }

      .container .content .right-side {
        width: 100%;
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


  <!-- this is the contact page -->
  <div class="sub-main">
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Surkhet, NP12</div>
            <div class="text-two">Birendranagar 06</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0098 9893 5647</div>
            <div class="text-two">+0096 3434 5678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">codinglab@gmail.com</div>
            <div class="text-two">info.codinglab@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Contact & Inquiry</div>
          <p>If you have any sort of queries or any kind of reviews you can write it on below.</p>
          <form action="contact_insert.php" method="post">
            <div class="input-box">
              <input name="name" type="text" placeholder="Enter your name">
            </div>
            <div class="input-box">
              <input name="email" type="text" placeholder="Enter your email">
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Enter your thoughts" name="note"></textarea>
            </div>
            <div class="submit9 44"name="submit">
              <input name="submit" type="submit" value="Send Now">
            </div>
          </form>
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