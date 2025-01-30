<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coffe webite</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="page.js"></script>
<body>
    <nav>
    <div class="logo">
        <h1>AVI<span>TRAIN</span></h1>
    </div>
    <ul id="menuList">
        <li><a href="#">home</a></li>
        <li><a href="#">service</a></li>
        <li><a href="booking.php">booking</a></li>
        <li><button class="first"><a href="login.php">login</a><button></li>
    </ul>
    <div class="menu-icon">
        <i class="fa-solid fa-bars"onclick="toggleMenu()"></i>
    </div>
    </nav>
    <div class="wrapper">
        <h1>Travel with peace of <span>mind with AVI/TRAIN</span></h1>
        <p>We have professional efficient and communicative. from booking to deliver, we have trip that are courteous
            , at handling goods with care we offer yhe best transportation severs you can every imagin.
        </p>
  <input type="submit" value="BOOKING" id="button" >
    </div>
 
    <img src="class_390_interior.jpeg" alt="" class="image">
    <div class="content">

        <div class="nice"></div>

      
        <h1>ABOUT US</h1>
        <p>we're a team of travel enthusiasts dedicated to make train travel easy, convenient and enjoyable with our user-friendly platform
            you can quikly search and book ticket , access real-time scheduling, and recive personalized travel recomendation
        </p>
        <input type="submit" value="Learn more" class="button2">
        </div>
    </div>
    <div class="img">
        <div class="image1">
            <img src="images (37).jpeg" alt=""id="first1">
            <p>we have nice and afordable trip service with great trip experence </p>
            <input type="submit" value="Learn more" class="button2">
        </div>
        <div class="image2">
            <img src="pexels-jeshoots-253647.jpg" alt=""  id="first2" >
            <p>we can deliver your goods to any part of nigeria and we will take good care of your good </p>
            <input type="submit" value="Learn more" class="button2">
        </div>
<div class="image3">
    <img src="pexels-senuscape-728360-1658967.jpg" alt="" id="first3">
    <p>we offer 100% security through our service we provide security personel to guide yo through our trip</p>
    <input type="submit" value="Learn more" class="button2">
</div>
    </div>
    <div class="comment">
        <h1>COMMENT</h1>
    <p>i alway a smooth ride with avitrain their punctuality and confort make my daliy commute a breeze i am also impreesed with their 
        customer service they went above and beyond to solve my ticket issue i enjoy confort and good security on avitrain avitrain 
        the ths best option for you choise wisly
    </p>
    <input type="submit" value="Learn more"  class="button3">
</div>
     
    <script src="https://kit.fontawesome.com/1ab5eb52bd.js" crossorigin="anonymous"></script> 
    <script>
        let menuList=document.getElementById("menuList")
        menuList.style.maxHeight="0px";

        function toggleMenu(){
            if(menuList.style.maxHeight=="0px")
            {
                menuList.style.maxHeight="300px"
            }
            else{
                menuList.style.maxHeight="0px"
            
        }
    }
    </script>
    </body>
    </html>