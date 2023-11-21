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

<div><img src = "images/truck.svg" alt = "Carbon Delivery"><span>Fri frakt & retur</span></div>
<div><img src = "images/securePayment.svg" alt = "Secure Payment"><span>Säker betalning</span></div>
<div><img src = "images/Klarna.svg" alt = "Klarna Logo"><span>Fler betalningsalternativ</span></div>

</div><!--firstImageFooter-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage2">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php" class = "moreInfoText">Mer information</a></h1>
<img class = "mobileImageImage marginLeft" alt = "">
<p class = "mobileImageText hidden"></p>
<button class = "marginLeft readMore" id = "borderButton" onclick = "displayText(productText[0]);">Läs mer</button>
<div class = "circles">
<button onclick = "changeCircle(circleArea1, 0)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 1)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea1, 2)"><img class = "circleArea1" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage2-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage3">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php" class = "moreInfoText">Mer information</a></h1>
<img class = "mobileImageImage marginLeft" alt = "">
<p class = "mobileImageText hidden"></p>
<button id = "borderButton" class = "marginLeft readMore" onclick = "displayText(productText[1]);">Läs mer</button>
<div class = "circles">
<button onclick = "changeCircle(circleArea2, 0)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 1)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
<button onclick = "changeCircle(circleArea2, 2)"><img class = "circleArea2" src = "images/circle.svg" alt = "Circle"></button>
</div><!--dv circles-->

</div><!--mobileImage3-->

<div class = "mobileImage smallerMobileImages" id = "mobileImage4">

<h1 class = "productHeader marginLeft">Produktnamn</h1>
<h1 class = "marginLeft"><a href = "index.php" class = "moreInfoText">Mer information</a></h1>
<img class = "mobileImageImage marginLeft" alt = "">
<p class = "mobileImageText hidden"></p>
<button id = "borderButton" class = "marginLeft readMore" onclick = "displayText(productText[2]);">Läs mer</button>
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

<div id = "downloadApp">
  <img id = "phones" src = "images/mobiler.svg" alt = "">
  <h3 class = "marginLeft">Ladda ner vår app</h3>
  <p class = "marginLeft">det är så bra att ladda ner våran app, så att du kan få aviseringar</p>
  <div id = "logosAndButton" class = "marginLeft">
    <img src = "images/Laddaner-knapp.svg" alt = "Ladda ner app">
    <img src = "images/a.svg" alt = "">
    <img src = "images/google.svg" alt = "Google Store">
  </div>
</div>

<footer>
  <div id = "left">
  <p>Signa upp på
vårt nyhetsbrev
och få 20% på ditt
nästa köp</p>

<form action="index.php#left" method="POST">
         <input type="email" id = "email" class = "smallMailInput" name="email" placeholder="Din mailadress">
         <button type="submit" value="submit" name="submit" id = "smallButton"><img id = "smallArrow" src = "images/smallArrow.svg"></button>
        
       </form>
       
       <!--<div><?php //if (isset ($_SESSION['message'][0])) echo($_SESSION['message'][0]);?></div>-->

       <div id = "logosAndButton">
    <img src = "images/instagram.svg" alt = "Instagram">
    <img src = "images/facebook.svg" alt = "Facebook">
    <img src = "images/youtube.svg" alt = "Youtube">
  </div>
</div>

<div id = "right">
  <h4>Hitta till oss</h4>
  <p>Göteborg</p>
  <p>Stockholm</p>
  <p>Malmö</p>
  <p>Uddevalla</p>

</div>
</footer>

<script src = "js.js"></script>

</body>
</html>