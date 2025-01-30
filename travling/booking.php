<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="booking.css">
    <script src="booking.js"></script>
</head>
<body>
    <div class="input">
    <form action="booking.php" method="post">
        <div class="wrapper">
            <h1>BOOKING</h1>
            <label for="class">FULLNAME:</label>
            <input type="text" id="username" name="username" required>
            <label for="class">FROM:</label>
            <select id="class" name="flocation" require>
    <option value="kwali">KWALI</option>
    <option value="amac">AMAC</option>
    <option value="kuje">KUJE</option>
    <option value="buwari">BUWARI</option>
    <option value="gwagwalasa">GWAGWALADE</option>
</select>
        <br><br>
        <label for="class">TO:</label>
        <select id="class" name="tlocation">
        <option value="kwali">KWALI</option>
    <option value="amac">AMAC</option>
    <option value="kuje">KUJE</option>
    <option value="buwari">BUWARI</option>
        <br><br>
        <label for="date">DATE:</label>
        <input type="date" name="date" id="date" required><br><br>
        <label for="class">CLASS:</label>
  <select id="class" name="class">
    <option value="economy">Economy</option>
    <option value="business">Business</option>
    <option value="first-class">First Class</option>
  </select><br><br>
  <input type="submit" value="Book Now" name="submit">
  </div>
</form>
</body>
<?php

require('./connect.php');
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $flocation=$_POST['flocation'];
    $tlocation=$_POST['tlocation'];
    $date=$_POST['date'];
    $class=$_POST['class'];
    $sql="INSERT INTO avitrain2 (username, flocation, tlocation, date, class )VALUES('$username','$flocation','$tlocation','$date','$class')";
  if (mysqli_query($conn,$sql)){
    
        header("location:payment.php");
    }else {
      echo"registration notsuccessful";
    } 
  }
?>
</html>