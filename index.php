<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protech</title>
    <link rel="icon" type="image/svg+xml." href="images/head.svg" />

    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</head>

<body>

    <header id="header">
        <nav>
            <img class="hidden" id="desktopLogo" src="images/Desktop_logga.svg" alt="Logo">
            <img id="ham" src="images/hamburgermeny.svg" alt="menu" onclick="alterHamburgerMeny()" class="hideForDesktop">
            <a class="hideForDesktop"></a>
            <a class="hidden desktopNavLink" href="#">Produkter</a>
            <a class="hidden desktopNavLink" href="#">Nyheter</a>
            <img id="logo" src="images/logga.svg" alt="Logo" class="hideForDesktop">
            <a class="hidden desktopNavLink" href="#">Om Oss</a>
            <a class="hidden desktopNavLink" href="#">Support</a>
            <img id="search" class="desktopSearchIcon desktopIcon" src="images/search.svg" alt="search">
            <img id="cart" class="desktopCartIcon desktopIcon" src="images/cart.svg" alt="shopping cart">
            <img class="langImg hidden desktopLangIcon desktopIcon" src="images/langSE.svg" onclick="changeLanguage()" alt="Swedish">
        </nav>

    </header>

    <div id="hamburgerMenu" class="hidden">

        <a>Produkter</a>
        <a>Nyheter</a>
        <a>Om oss</a>
        <a>Support</a>

        <div id="hamburgerLogos">
            <img class="langImg" src="images/langSE.svg" onclick="changeLanguage()" alt="Swedish">
            <img src="images/instagram.svg" alt="Instagram">
            <img src="images/facebook.svg" alt="Facebook">
            <img src="images/youtube.svg" alt="Youtube">

        </div>

    </div>

    <div id="newsLetter" class="mobileImage">

        <div id="mail" class="mainImage">
            <h1 id="productName" class="productHeader marginLeft">Produktnamn</h1>
            <h1 id="mailh1" class="marginLeft"><a href="index.php" id="mainInfo">Mer information</a></h1>
            <p class="hidden" id="mainText" onclick="displayText(mainText);"></p>
            <button id="borderButton" class="marginLeft" onclick="displayText(mainText);">Läs mer om oss</button>
            <br>
            <button id="borderButton" class="blackButton marginLeft" onclick="changeNewsLetter(1)">Prenumerera på vårt nyhetsbrev</button>
        </div>

        <div id="form">
            <h3>Signa upp på vårt nyhetsbrev för att bli först med att få information om våra produkter, lansering, kampanjer och mycket annat!
            </h3>
            <form action="index.php" method="POST">
                <img id="x" onclick="changeNewsLetter(0)" src="images/cross.svg" alt="Cross">
                <input type="email" id="email" name="email" placeholder="Din mailadress">
                <button id="arrowButton" type="submit" value="submit" name="submit"><img class="formArrows" id="arrow" src=""></button>

            </form>

            <div id="message"><?php if (isset($_SESSION['message'][0])) echo ($_SESSION['message'][0]); ?></div>

        </div>

    </div><!--newsLetter-->

    <div class="mobileImage" id="firstImageFooter">

        <div><img src="images/truck.svg" alt="Carbon Delivery"><span>Fri frakt & retur</span></div>
        <div><img src="images/securePayment.svg" alt="Secure Payment"><span>Säker betalning</span></div>
        <div><img src="images/klarna.svg" alt="Klarna Logo"><span>Fler betalningsalternativ</span></div>

    </div><!--firstImageFooter-->

    <div class="mobileImage smallerMobileImages mobileImageImage" id="mobileImage2">

        <h1 class="productHeader marginLeft">Produktnamn</h1>
        <h1 class="marginLeft"><a href="index.php" class="moreInfoText">Mer information</a></h1>
        <p class="mobileImageText hidden" onclick="displayText(productText[0]);"></p>
        <button class="marginLeft readMore" id="borderButton" onclick="displayText(productText[0]);">Läs mer om produkten</button>
        <div class="circles">
            <button onclick="changeCircle(circleArea1, 0)"><img class="circleArea1" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea1, 1)"><img class="circleArea1" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea1, 2)"><img class="circleArea1" src="images/circle.svg" alt="Circle"></button>
        </div><!--dv circles-->

    </div><!--mobileImage2-->

    <div class="mobileImage smallerMobileImages mobileImageImage" id="mobileImage3">

        <h1 class="productHeader marginLeft">Produktnamn</h1>
        <h1 class="marginLeft"><a href="index.php" class="moreInfoText">Mer information</a></h1>
        <p class="mobileImageText hidden" onclick="displayText(productText[1]);"></p>
        <button id="borderButton" class="marginLeft readMore" onclick="displayText(productText[1]);">Läs mer om produkten</button>
        <div class="circles">
            <button onclick="changeCircle(circleArea2, 0)"><img class="circleArea2" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea2, 1)"><img class="circleArea2" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea2, 2)"><img class="circleArea2" src="images/circle.svg" alt="Circle"></button>
        </div><!--dv circles-->

    </div><!--mobileImage3-->

    <div class="mobileImage smallerMobileImages mobileImageImage" id="mobileImage4">

        <h1 class="productHeader marginLeft">Produktnamn</h1>
        <h1 class="marginLeft"><a href="index.php" class="moreInfoText">Mer information</a></h1>
        <p class="mobileImageText hidden" onclick="displayText(productText[2]);"></p>
        <button id="borderButton" class="marginLeft readMore" onclick="displayText(productText[2]);">Läs mer om produkten</button>
        <div class="circles">
            <button onclick="changeCircle(circleArea3, 0)"><img class="circleArea3" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea3, 1)"><img class="circleArea3" src="images/circle.svg" alt="Circle"></button>
            <button onclick="changeCircle(circleArea3, 2)"><img class="circleArea3" src="images/circle.svg" alt="Circle"></button>
        </div><!--dv circles-->

    </div><!--mobileImage4-->
    <!-------------------------------------------------------------------------------------------------------------------->

    <div class="imgButtons hidden">

        <div class="imgDiv hidden">
            <button class="slide" onclick="changeImage(1);">></button>
            <h2 class="imgName"></h2>
            <p class="imgText"></p>
        </div>

        <div class="imgDiv hidden">
            <button class="slide" onclick="changeImage(1);">></button>
            <h2 class="imgName"></h2>
            <p class="imgText"></p>
        </div>

        <div class="imgDiv hidden">
            <button class="slide" onclick="changeImage(1);">></button>
            <h2 class="imgName"></h2>
            <p class="imgText"></p>
        </div>



    </div>

    <!----------------------------------------------------------------------------------------------------------------------->

    <div id="downloadApp">
        <img id="phones" src="images/mobiler.svg" alt="">
        <h3 class="marginLeft">Ladda ner vår app</h3>
        <p class="marginLeft">Genom att ladda ner vår app kan du enkelt sköta synkronisering
            av dina tekniska tillbehör i en central hub.</p>
        <p class="marginLeft">
             ProTech™ förenklar
            hanteringen av dina glasögon, skor och klockor och ger dig mer
            tid att njuta av dem. Du hittar ProTech™ appen där appar finns.</p>
        <div id="logosAndButton" class="marginLeft">
            <img src="images/Laddaner-knapp.svg" alt="Ladda ner app">
            <img class="marginLeft" src="images/a.svg" alt="">
            <img src="images/google.svg" alt="Google Store">
        </div>
    </div>

    <footer>
        <div id="left">
            <p>Signa upp på
                vårt nyhetsbrev
                och få 20% på ditt
                nästa köp</p>

            <form action="index.php#left" method="POST">
                <input type="email" id="email" class="smallMailInput" name="email" placeholder="Din mailadress">
                <button type="submit" value="submit" name="submit" id="smallButton"><img class="formArrows" id="smallArrow" alt="" src="images/smallArrowBlack.svg"></button>
                <span class="checkMarks">&#9989;</span>
            </form>

            <!--<div><?php //if (isset ($_SESSION['message'][0])) echo($_SESSION['message'][0]);
                        ?></div>-->

            <div id="logosAndButton">
                <img src="images/instagramBlack.svg" alt="Instagram">
                <img src="images/facebookBlack.svg" alt="Facebook">
                <img src="images/youtubeBlack.svg" alt="Youtube">
                <img class="langImg" src="images/langSE.svg" onclick="changeLanguage()" alt="Swedish">
            </div>
        </div>

        <div id="right">
            <h4>Hitta till oss</h4>
            <p>Göteborg</p>
            <p>Stockholm</p>
            <p>Malmö</p>
            <p>Uddevalla</p>

        </div>
    </footer>

    <script src="js.js"></script>

</body>

</html>