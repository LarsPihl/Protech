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
    <div class = "imgButtons">
<button onclick = "changeImage(-1);"><</button>
<div class = "imgDiv">
<h2 class = "imgName"></h2>
<img class = "img">
<p class = "imgText"></p>
</div>

<div class = "imgDiv">
<h2 class = "imgName"></h2>
<img class = "img">
<p class = "imgText"></p>
</div>

<div class = "imgDiv">
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