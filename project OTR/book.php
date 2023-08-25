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

    /* form css */

    .sub-body {
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
      padding: 10px;
    }

    .container {
      max-width: 700px;
      width: 100%;
      background-color: #fff;
      padding: 25px 30px;
      border-radius: 5px;
      border-style: solid;
      border-color: black;
      
    }

    .container .title {
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }

    .container .title::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 30px;
      border-radius: 5px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    .content form .user-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
    }

    form .input-box span.details {
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .user-details .input-box input {
      height: 45px;
      width: 100%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }
 

    .user-details .input-box textarea {
      height: 80px;
      width: 210%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }

    .flex {
  display: flex;
  justify-content: space-between;
}
.user-details .input-box .input_box-smal input{
      width:90%;
    }
    .user-details .input-box .input_box-small input{
      width:90%;
    }


    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
      border-color: #9b59b6;
    }

    form .button {
      height: 45px;
      margin: 35px 0
    }

    form .button input {
      height: 100%;
      width: 100%;
      border-radius: 5px;
      border: none;
      color: #000;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all 0.3s ease;
      background-color: #fcc0ae;
    }

  

    @media(max-width: 584px) {
      .container {
        max-width: 100%;
      }

      form .user-details .input-box {
        margin-bottom: 15px;
        width: 100%;
      }

      form .category {
        width: 100%;
      }

      .content form .user-details {
        max-height: 300px;
        overflow-y: scroll;
      }

      .user-details::-webkit-scrollbar {
        width: 5px;
      }
    }

    @media(max-width: 459px) {
      .container .content .category {
        flex-direction: column;
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


  <!-- the form page -->

  <div class="sub-body">
    <div class="container">
      <div class="title">Book Table</div>
      <div class="content">
        <form action="book_table_insert.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" name="full_name" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="number" placeholder="Enter your number" name="phone_no" required>
            </div>
            <div class="input-box">
  <div class="flex">
    <div class="input_box-smal">
      <span class="details">No. of People</span>
      <input type="number" placeholder="Enter no." name="no_of_people" required>
    </div>


<div class="input-box">
  <span class="details">Tables</span>
 <select name="tables" required  style="height: 45px;
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
                border-bottom-width: 1px;
              border-bottom-width: 1px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;" >
    <option value="" disabled selected>Select table</option>
    <option value="Table 1">Table 1</option>
    <option value="Table 2">Table 2</option>
    <option value="Table 1">Table 3</option>
    <option value="Table 2">Table 4</option>
    <option value="Table 1">Table 5</option>
    <option value="Table 2">Table 6</option>
  </select>
  <?php
if (isset($_GET['tablestatus'])) {
  echo '<p id="warning-message" style="color: red;">' . $_GET['tablestatus'] . '</p>';
} else {
  echo '<p id="warning-message" style="color: red; display: none;"></p>';
}
?>

</div>



  </div>
</div>
            <div class="input-box">
              <span class="details">Date</span>
              <input type="date" placeholder="Enter the date" name="date" required>
            </div>
            <div class="input-box">
  <span class="details">Time</span>
  <div class="flex">
    <div class="input_box-smal">
    <select name="time_hour" style="height: 45px;
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
                border-bottom-width: 1px;
              border-bottom-width: 1px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;" required>
        <option value="" disabled selected>Hour</option>
        <!-- Add options for hours (1 to 12) -->
        <?php
        for ($hour = 1; $hour <= 12; $hour++) {
          echo "<option value=\"$hour\">$hour</option>";
        }
        ?>
      </select>
    </div>
    <div class="input_box-small">
      <select name="time_minute" style="height: 45px;
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
                border-bottom-width: 1px;
              border-bottom-width: 1px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;"  required>
        <option value="" disabled selected>Minute</option>
        <!-- Add options for minutes (00 to 59) -->
        <?php
        for ($minute = 0; $minute <= 59; $minute++) {
          echo "<option value=\"$minute\">$minute</option>";
        }
        ?>
      </select>
    </div>
    <div class="input_box-small">
      <select name="time_period" style="height: 45px;
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
                border-bottom-width: 1px;
              border-bottom-width: 1px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;"  required>
        <option value="" disabled selected>Period</option>
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select>
    </div>
  </div>
</div>

            <div class="input-box">
            <span class="details">Description</span>
            <textarea name="note" id="note" rows="4"></textarea>
            </div>
          </div>
          <div class="button" type="submit" name="submit">
            <input type="submit" name="submit" value="Book Table">
          </div>
        </form>
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
<script>
  // Wait for the document to be fully loaded
  document.addEventListener("DOMContentLoaded", function() {
    // Get the warning message element
    var warningMessage = document.getElementById("warning-message");
    
    // Check if the warning message has content
    if (warningMessage.innerHTML.trim() !== "") {
      // Display the warning message
      warningMessage.style.display = "block";
    }
  });
</script>

</body>

</html>