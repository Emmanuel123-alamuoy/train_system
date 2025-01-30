<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form action="register.php" method="post">
    <div class="container">
 <h1>create accont</h1>
 <div class="input">
 <input type="text" placeholder="username" id="username" name="username">
 <input type="email" placeholder="email" id="email" name="email">
<input type="password" placeholder="password" id="password" name="password">
<input type="password" placeholder="repeat password" id="repeat password" name="repeatpassword">
 <button class="button1" name="submit">signup</button>
 </div> 
 </form>
</body>
<?php
require('./connect.php');
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $repeatpassword=$_POST['repeatpassword'];
 
    $sql="INSERT INTO avitrain (username, password, email)VALUES('$username','$password','$email')";
  if (mysqli_query($conn,$sql)){
    if (empty($username)|| empty($password) || empty($email)) {
      echo"<center> <font color='red'>input field";
 
  }else {
    header("location:login.php");
  }
}else {
  echo"<center> <font color='green'>registration notsucessful";
}
}
 
    

?>
</html>