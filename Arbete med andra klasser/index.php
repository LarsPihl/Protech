<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="sv">
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

<header id = "header">
  <nav>
    <img src = "images/hamburgermeny.svg" alt = "menu" onclick="alterHamburgerMeny()">
    <a class = "hidden">Rubrik</a>
    <a class = "hidden">Rubrik</a>
    <a></a>
    <img src = "images/logga.svg" alt = "Logo">

    <a class = "hidden">Rubrik</a>
    <a class = "hidden">Rubrik</a>
    <img id = "search" src = "images/search.svg" alt = "search">
    <img id = "cart" src = "images/cart.svg" alt = "shopping cart">
  </nav>
  
</header>

<div id = "hamburgerMenu" class = "hidden">

  <a>Produkter</a>
  <a>Nyheter</a>
  <a>Om oss</a>
  <a>Support</a>

  <div id = "hamburgerLogos">
    <img id = "langImg" src = "images/langSE.svg" onclick = "changeLanguage()" alt = "Swedish">
    <img src = "images/instagram.svg" alt = "Language">
    <img src = "images/facebook.svg" alt = "Language">
    <img src = "images/youtube.svg" alt = "Language">

  </div>

</div>

<div id = "newsLetter" class = "mobileImage">

<div id = "mail">
<h1 id = "productName" class = "productHeader">Produktnamn</h1>
<h1 id = "mailh1"><a href = "index.php">Mer information</a></h1>
<button id = "borderButton">Läs mer om produkten</button>
<br>
<button id = "borderButton" class = "blackButton" onclick = "changeNewsLetter(1)">Prenumerera på vårt nyhetsbrev</button>
</div>

<div id = "form">
  <h3>Vårt nyhetsbrev</h3>
<form action="index.php" method="POST">
<img id = "x" onclick = "changeNewsLetter(0)" src = "images/cross.svg" alt = "Cross">
         <input type="email" id="email" name="email" placeholder="Din mailadress">
         <button id = "arrowButton" type="submit" value="submit" name="submit"><img id = "arrow" src = "images/arrow.svg"></button>
        
       </form>
       
       <div id = "message"><?php if (isset ($_SESSION['message'][0])) echo($_SESSION['message'][0]);?></div>

       </div>

</div><!--newsLetter-->

<div class = "mobileImage" id = "firstImageFooter">

  <img src = "images/truck.svg" alt = "Carbon Delivery">
  <img src = "images/securePayment.svg" alt = "Secure Payment">
  <img src = "images/Klarna.svg" alt = "Klarna Logo">

</div><!--firstImageFooter-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage2">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button class = "marginLeft readMore" id = "borderButton">Läs mer</button>
<div class = "circles">
<button onclick = "changeCircle(circleArea1, 0)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 1)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 2)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage2-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage3">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button id = "borderButton" class = "marginLeft readMore">Läs mer</button>
<div class = "circles">
<button onclick = "changeCircle(circleArea2, 0)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 1)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 2)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage3-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage4">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php">Mer information</a></h1>
<button id = "borderButton" class = "marginLeft readMore">Läs mer</button>
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



<footer>
  <h2>Footer</h2>
</footer>

<script src = "js.js"></script>

</body>
</html>