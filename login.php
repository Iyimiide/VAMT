<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: landing.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: landing.php");
    }
    else{
      echo "<div class='alert alert-danger'>Wrong Password</div>";
    }
  }
  else{
    echo "<div class='alert alert-danger'>User Not Registered</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
.logo-container {
            display: flex;
            align-items: center; /* Center the logo vertically */
            padding: 10px 20px; /* Add padding around the logo */
        }
        /* Style for the logo image */
        .logo {
            width: 100px; /* Adjust the width as needed */
            height: auto; /* Automatically adjust the height while maintaining aspect ratio */
            margin-right: 20px; /* Add spacing between logo and navigation items */
        }
header {
    background-color: white; /* Change the background color to white */
    color: darkgoldenrod; /* Change the font color to dark gold */
    padding: 10px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header a {
    color: darkgoldenrod; /* Change link color to dark gold */
    text-decoration: none;
    transition: color 0.3s;
}

header a:hover {
    color: #66ccff;
}

header ul {
    list-style: none;
    display: flex;
    align-items: center;
}

header li {
    margin: 0 15px;
    position: relative; /* Add this line for dropdown positioning */
}

/* Dropdown menu styles */
ul.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #333;
    border-top: 2px solid #66ccff;
    z-index: 1;
    min-width: 150px;
}

nav li:hover > ul.dropdown-menu {
    display: block;
}

ul.dropdown-menu li {
    margin: 0;
}

ul.dropdown-menu a {
    color: white;
    padding: 10px;
    display: block;
    text-decoration: none;
    transition: background-color 0.3s;
}

ul.dropdown-menu a:hover {
    background-color: #66ccff;
}


        
        /* Additional styles for a fancy look */
        .redirect-link a {
            background-color: #66ccff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .redirect-link a:hover {
            background-color: #ff3366;
        }
         /* Footer styles */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-content p {
            margin: 0;
        }

        .footer-content ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .footer-content a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-content a:hover {
            color: #66ccff;
        }
  </style>
  </head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Admin</h2>
          </div>
          <div class="card-body">
            <form action="" method="post" autocomplete="off">
              <div class="form-group">
                <label for="usernameemail">Username or Email:</label>
                <input type="text" name="usernameemail" id="usernameemail" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
            </form>
                              <li> <a href="index.html">Home</a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
