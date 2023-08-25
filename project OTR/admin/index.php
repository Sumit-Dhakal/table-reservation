<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cherry_bloom";

// creating the connection to the server
$conn = new mysqli($servername, $username, $password, $databasename);

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

echo "connection success";

session_start();


?> -->

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

</head>
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
    /* Simplified card styling */
    .card {
      background-color: #fcaeae; /* Set your desired background color */
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
      text-align: center; /* Added for centering content */
    }
    .card-link {
    color: black; /* Change the color to black */
    text-decoration: none; /* Remove underline */
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

<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">Cherry Bloom</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
    <div class="menu">
        <li><a href="Index.php">Dashboard</a></li>
      </div>
    </ul>
  </nav>
  

 
  <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
            <a href="Registered.php" class="card-link">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;color:black;"></i>
                    <h4 style="color:black;">Total Users</h4>
                    <h5 style="color:black;">
                    <?php
            // Fetch total user count from the database
            $sql = "SELECT COUNT(*) AS total_users FROM users";
            $result = mysqli_query($conn, $sql);

            if ($result) {
              $row = mysqli_fetch_assoc($result);
              $totalUsers = $row['total_users'];
              echo $totalUsers;
            } else {
              echo "Error fetching user count";
            }
            ?>
                    </h5>
                    </div>
          </a>
            </div>
           
            <div class="col-sm-3">
            <a href="bookings.php" class="card-link">
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;color:black;"></i>
                    <h4 style="color:black;">Bookings</h4>
                    <h5 style="color:black;">
                    <?php
            // Fetch total user count from the database
            $sql = "SELECT COUNT(*) AS Bookings FROM book_table";
            $result = mysqli_query($conn, $sql);

            if ($result) {
              $row = mysqli_fetch_assoc($result);
              $Bookings = $row['Bookings'];
              echo $Bookings;
            } else {
              echo "Error fetching Booking";
            }
            ?>
                    </h5>
                </div>
          </a>
            </div>
            <div class="col-sm-3">
            <a href="ad_menu.php" class="card-link">
            <div class="card">
      <i class="fa fa-th mb-2" style="font-size: 70px; color: black;"></i>
      <h4 style="color: black;">Menu</h4>
      <h5 style="color: black;">
                    <?php
            // Fetch total user count from the database
            $sql = "SELECT COUNT(*) AS Menu FROM menu";
            $result = mysqli_query($conn, $sql);

            if ($result) {
              $row = mysqli_fetch_assoc($result);
              $Menu = $row['Menu'];
              echo $Menu;
            } else {
              echo "Error fetching user count";
            }
            ?>
                </div>
            </a>
            </div>
            <div class="col-sm-3">
            <a href="feedbacks.php" class="card-link">
                <div class="card">
                    <i class="fa fa-list mb-2" style="font-size: 70px;color:black;" ></i>
                    <h4 style="color:black;">Feedbacks</h4>
                    <h5 style="color:black;">
                    <?php
$sql = "SELECT COUNT(*) AS Feedback FROM message";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $Feedbacks = $row['Feedback']; // Corrected array key
    echo $Feedbacks;
} else {
    echo "Error fetching user count";
}
?>

                    </h5>
                </div>
            </a>
            </div>
        </div>
  </div>

  

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
  <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>