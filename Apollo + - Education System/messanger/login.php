<?php
include_once("php/config.php");
session_start();
if(isset($_SESSION['id'])){
    header("location: users.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apollo+ | Messenger Login </title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/login.css">
</head>
<style>
	 body{ 
  background: url(76YM.gif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


</style> 
<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <h2><Center> Apollo+ Messenger</center> </h2>
        <form action="" autocomplete="off" id="loginForm">
            <div id="errors">Invalid Email Address</div>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have a account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</body>
</html>
