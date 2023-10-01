<?php
require 'config2.php';
if(!empty($_SESSION["id"])){
  header("Location: landing2.php");
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
      header("Location: landing2.php");
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
  <title>Admin Login</title>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    .card-header h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
    }
    .btn {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    .mt-3 {
      margin-top: 15px;
      text-align: center;
    }
    .mt-3 a {
      color: #007bff;
      text-decoration: none;
    }
    .mt-3 a:hover {
      color: #0056b3;
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
            <div class="mt-3">
              <a href="registration2.php">Create An Admin account</a>
                              <li> <a href="index.html">Home</a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
