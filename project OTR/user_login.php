<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* style.css */

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 400px; 
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            border-style: solid;
            border-color: black;
            top: 100px;
            position:absolute;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #F0F1F8;
        }

        button[type="submit"] {
            background-color: #fcc0ae;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a.ca {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        /* Add space between icon and text */
        .top-right-link {
          position: absolute;
            top: 5px;
            right: 10px;
            display: inline-block;
            color:black;
        
            box-shadow: #F05D5D 0 10px 20px -10px;
             box-sizing: border-box;
        
            text-decoration: none;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
          
          background: #F05D5D;
          border-radius: 999px;
          font-size: 16px;
          
        }
        .ad-btn{
          color:white;
        }
    </style>
</head>
<body>
<a href="admin/ad_log.php" class="ca top-right-link">
            <i class="fas fa-user-gear"></i> <span class="ad-btn">Admin</span>
        </a>
<div class="form-container">
    <form action="user_login_php.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="user_signup.php" class="ca">Create an account</a>
       
    </form>
</div>
</body>
</html>






