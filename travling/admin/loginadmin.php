<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminlogin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="loginadmin.php" method="post">
    <div class="wrapper">
        <h1>login admin</h1>
        <div class="input">
            <input type="text" placeholder="username" id="username" name="username"><i class="fa-solid fa-user"></i>
            <input type="password" placeholder="password" id="password" name="password" ><i class="fa-solid fa-lock"></i>
        <button class="button" name="confirm">login</a></button>
        </div>
        <div class="me">
        <a href="register.php">craete account?</a>
        <a href="#">forget password?</a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1ab5eb52bd.js" crossorigin="anonymous"></script>
</form> 
</body>

<?php

require('./connect.php');
if (isset($_POST['confirm'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT*FROM aviadmin WHERE username='$username'AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        $rows=mysqli_fetch_assoc($result);
        if (empty($username)){
            echo"<center> <font color='red'>input field";  
     
    }else {
        header('location:ticket.php');
     
    }
        
    
    
}else {
    echo"<center> <font color='red'>invalid id";
}
}
   
?>

</html>