<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  
  ?>
<form action="pay.php" method="post">
    <input type="text" name="username" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <label>click any class to see the amount</label>
    <select  name="class" id="select">
    <option value="Economy">Economy</option>
    <option value="Business">Business</option>
    <option value="first-class">first class </option>
</select>
    <input type="text" name="amount"  class="amount">
    <input type="submit" value="pay" name="pay">
</form>
<script>
    const classE1=document.getElementById("select");
const payamount=document.querySelector(".amount");

classE1.addEventListener('change',()=>{
    
  if (classE1.value=="Economy") {
    payamount.value=`#10,000`;
    
  }if (classE1.value==="Business") {
    payamount.value=`#20,000`;
  }if (classE1.value==="first-class") {
    payamount.value=`#30,000`;
  }
});
    </script>
</body>
</html>

