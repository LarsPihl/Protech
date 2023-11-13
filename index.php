<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protech</title>
    <link rel="icon" type="image/svg+xml." href="images/head.svg"/>
    <head>
        <link rel="stylesheet" href="style.css">
      </head>
</head>
<body>

<header>
  <nav>
    <img src = "/images/hamburgermeny.svg" alt = "menu">
    <a class = "hidden">Rubrik</a>
    <a class = "hidden">Rubrik</a>
    <a></a>
    <img src = "images/Logga.svg" alt = "Logo">

    <a class = "hidden">Rubrik</a>
    <a class = "hidden">Rubrik</a>
    <img id = "search" src = "images/search.svg" alt = "search">
    <img id = "cart" src = "images/cart.svg" alt = "shopping cart">
  </nav>
  
</header>

<div class = "mobileImage" id = "mobileImage1">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button class = "marginLeft"><img src = "images/buyButton.svg"></button>
<br>
<button class = "marginLeft"><img src = "images/readMoreButton.svg"></button>

</div><!--mobileImage1-->

<div class = "mobileImage" id = "firstImageFooter">

  <img src = "images/truck.svg" alt = "Carbon Delivery">
  <img src = "images/securePayment.svg" alt = "Secure Payment">
  <img src = "images/Klarna.svg" alt = "Klarna Logo">

</div><!--firstImageFooter-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage2">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button class = "marginLeft readMore"><img src = "images/readMoreButton.svg"></button>
<div class = "circles">
<button onclick = "changeCircle(circleArea1, 0)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 1)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 2)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage2-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage3">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button class = "marginLeft readMore"><img src = "images/readMoreButton.svg"></button>
<div class = "circles">
<button onclick = "changeCircle(circleArea2, 0)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 1)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 2)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage3-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage4">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button class = "marginLeft readMore"><img src = "images/readMoreButton.svg"></button>
<div class = "circles">
<button onclick = "changeCircle(circleArea3, 0)"><img class = "circleArea3" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea3, 1)"><img class = "circleArea3" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea3, 2)"><img class = "circleArea3" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage4-->
<!-------------------------------------------------------------------------------------------------------------------->

  <div class = "imgButtons hidden">
<button onclick = "changeImage(-1);"><</button>
<div class = "imgDiv hidden">
<h2 class = "imgName"></h2>
<img class = "img">
<p class = "imgText"></p>
</div>

<div class = "imgDiv">
<h2 class = "imgName"></h2>
<img class = "img">
<p class = "imgText"></p>
</div>

<div class = "imgDiv hidden">
<h2 class = "imgName"></h2>
<img class = "img">
<p class = "imgText"></p>
</div>

<button onclick = "changeImage(1);">></button>

</div>

<!----------------------------------------------------------------------------------------------------------------------->

<div id = "newsLetter" class = "mobileImage smallerMobileImages">

<div id = "mail">
<p>SIGNA UPP PÅ VÅRT NYHETSBREV OCH FÅ 20% PÅ DITT NÄSTA KÖP</p> 
<button id = "arrowButton" onclick = "changeNewsLetter(1)"><img id = "arrow" src = "images/arrow.svg" alt = "Arrow"></button>
</div>
<div id = "form">
  <h3>VÅRT NYHETSBREV</h3>
<form action="" method="POST">
         <input type="email" id="email" name="email" placeholder="Din mailadress">
         <button type="submit" value="submit" name="submit">Prenumerera</button>
       </form>
       
       <div id = "message"><?php echo($_SESSION['message'][0]); ?></div>

       </div>


<div class = "circles">
<button onclick = "changeNewsLetter(0)"><img class = "circleArea4" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeNewsLetter(1)"><img class = "circleArea4" src = "images/circle.svg" alt = "Circle"></button>
</div>
</div><!--newsLetter-->

<footer>
  <h2>Footer</h2>
</footer>

<script src = "js.js"></script>

</body>
</html>