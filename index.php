<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</div>

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

<form action="" method="POST">
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email">
  <button type="submit" value="submit" name="submit">Submit</button>
</form>

<?php echo($_SESSION['message'][0]); ?>

<script src = "js.js"></script>
    
</body>
</html>