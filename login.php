<?php
session_start(); // Start a session
require 'config.php';

if (!empty($_SESSION["id"])) {
    header("Location: landing.php");
}

if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row['password']) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: landing.php");
        } else {
            $error_message = "Wrong Password";
        }
    } else {
        $error_message = "User Not Registered";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
     /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.card {
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
    text-align: center;
    padding: 20px;
    background-color: #007bff;
    color: #fff;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.card-body {
    padding: 20px;
}

.card h2 {
    font-size: 24px;
    margin: 0;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
    display: block;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-primary {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
}
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Admin Login</h2>
                </div>
                <div class="card-body">
                    <?php if (isset($error_message)) : ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
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
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
