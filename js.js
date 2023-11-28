var images1 = [
    {name : "Glasögon 1", image : "images/Glasses_desktop_1.svg", moreInfo : "Mer Info", text : "Techvision"},
    {name : "Glasögon 2", image : "images/Glasses_desktop_2.svg", moreInfo : "Mer info", text : "Techvision"},
    {name : "Glasögon 3", image : "images/Glasses_desktop_3.svg", moreInfo : "Mer info", text : "Techvision"}
];

var images2 = [
    {name : "Skor 1", image : "images/Render1.svg", moreInfo : "Mer info", text : "LightStrider"},
    {name : "Skor 2", image : "images/Render2.svg", moreInfo : "Mer info", text : "LightStrider"},
    {name : "Skor 3", image : "images/Render3.svg", moreInfo : "Mer info", text : "LightStrider"}
    
];

var images3 = [
    {name : "name 31", image : "images/redShoes.svg", moreInfo : "More info", text : "Text about Shoes"},
    {name : "name 32", image : "https://www.sony.se/image/d871cec13c1b5860e8f2d262b5bd52aa?fmt=pjpeg&wid=1200&hei=470&bgcolor=F1F5F9&bgc=F1F5F9", moreInfo : "More info", text : "Text about object 2"},
    {name : "name 33", image : "https://www.elgiganten.se/image/dv_web_D1800010021494660/602695/samsung-85-cu8075-4k-led-smart-tv-2023.jpg", moreInfo : "More info", text : "Text about object 3"}
];

var maxNum = images1.length, imageName = document.getElementsByClassName("imgName"), imageSrc = document.getElementsByClassName("img"),
imgText = document.getElementsByClassName("imgText"), imgDiv = document.getElementsByClassName("imgDiv"),
circleArea1 = document.getElementsByClassName("circleArea1"), circleArea2 = document.getElementsByClassName("circleArea2"),
circleArea3 = document.getElementsByClassName("circleArea3"), circleArea4 = document.getElementsByClassName("circleArea4"),
mail = document.getElementById("mail"), form = document.getElementById("form"), message = document.getElementById("message").innerHTML,
header = document.getElementById("header"), hamburgerMenu = document.getElementById("hamburgerMenu"), lang = document.getElementsByClassName("langImg"),
productName = document.getElementById("productName"), smallerMobileImages = document.getElementsByClassName("smallerMobileImages"), 
circleClass = document.getElementsByClassName("circles"), productText = document.getElementsByClassName("mobileImageText"),
moreInfoText = document.getElementsByClassName("moreInfoText"), firstProductButton = document.getElementById("borderButton"),
mainInfo = document.getElementById("mainInfo"), mainImage = document.getElementsByClassName("mainImage"),
mainText = document.getElementById("mainText"), formArrows = document.getElementsByClassName("formArrows")
;

var numberOfImgDivs = imgDiv.length, randomNumber = Math.floor(Math.random() * (maxNum-(numberOfImgDivs-1)));


changeCircle(circleArea1, 0);
changeCircle(circleArea2, 0);
changeCircle(circleArea3, 0);

mainText.style.visibility = "hidden";
hamburgerMenu.style.visibility = "hidden";
for (let i = 0; i < productText.length; i++) 
productText[i].style.visibility = "hidden";


if (message.length == 0) changeNewsLetter(0);

else changeNewsLetter(1);

if (message == "Din mailadress har lagts till.") {
    for (let i = 0; i < formArrows.length; i++) {
    formArrows[i].src = "images/checkMark.svg";
    formArrows[i].style.backgroundColor = "#43A047";
    formArrows[i].src = "images/checkMark.svg";
    formArrows[i].style.backgroundColor = "#43A047";
    }
    formArrows[1].style.width = "28px";
    formArrows[1].style.marginBottom = "-1px";
    
}

else {
    formArrows[0].src = "images/arrow.svg";
    formArrows[1].src = "images/smallArrowBlack.svg";
    
}
document.addEventListener("scroll", (event) => {
    lastKnownScrollPosition = window.scrollY;
    if (lastKnownScrollPosition >= 300) header.style.backgroundColor = "white";
    else header.style.backgroundColor = "transparent";
})

function swipeImage(index, imageArea, circelArea, object) {
    let newIndex = 0;
    for (let i = 0; i < object.length; i++) {
        if (imageName[imageArea].innerHTML == object[i].name) {
        newIndex = i+index;
        break;
        }
    }
    if (newIndex >= maxNum) newIndex = 0;
    else if (newIndex < 0) newIndex = maxNum-1;
changeCircle(circelArea, newIndex);
}

function displayText(paragraph) {
    if (paragraph.style.visibility == "hidden")
    paragraph.style.visibility = "visible";
    else paragraph.style.visibility = "hidden";
}

function changeCircle(area, index) {
    for (let i = 0; i < area.length; i++) {
        area[i].style.backgroundColor = "transparent";
        area[i].style.width = "100%";
        if (i == index) {
            area[i].style.backgroundColor = "black";
            area[i].style.borderRadius = "50%";
            area[i].style.width = "75%";
        }
    
    }//for
    changeContent(area, index);
    }//changeCircle

    function changeContent (area, index) {
        let mobileSection;
       

        for (let i = 0; i < circleClass.length+1; i++) {
            if (area[0].className == "circleArea" + i) {
                mobileSection = document.getElementsByClassName("smallerMobileImages")[i];
                let productHeader = document.getElementsByClassName("productHeader")[i];
                let objectArray = findObjectArray(i);
                productHeader.innerHTML = objectArray[index].name;
                document.getElementsByClassName("mobileImageImage")[i-1].style.backgroundImage = "url(" + objectArray[index].image + ")";
                document.getElementsByClassName("mobileImageImage")[i-1].style.backgroundSize = "100VW";
                productText[i-1].innerHTML = objectArray[index].text;
                moreInfoText[i-1].innerHTML = objectArray[index].moreInfo;

                imageName[i-1].innerHTML = objectArray[index].name;
                imgText[i-1].innerHTML = objectArray[index].text;
                imgDiv[i-1].style.backgroundImage = "url(" + objectArray[index].image + ")";
                imgDiv[i-1].style.backgroundSize = "100% 100%";
                
            }//if
    }//for

}//function

function findObjectArray(i) {
    if (i == 1) objectArray = images1;
    else if (i == 2) objectArray = images2;
    else if (i == 3) objectArray = images3;
    return objectArray;
}

    function changeNewsLetter (index) {
        //changeCircle(circleArea4, index);
        if (index == 1) {
form.style.visibility = "visible";
form.style.width = "80vw";
form.style.height = "480px";
document.getElementById("newsLetter").style.alignItems = "center";
document.getElementById("form").style.textAlign = "center";
header.style.visibility = "hidden";
return;
        }

        else {
            
            form.style.visibility = "hidden";
            header.style.visibility = "visible";
form.style.width = "0px";
form.style.height = "0px";
document.getElementById("newsLetter").style.alignItems = "";
document.getElementById("message").innerHTML = "";
        }

    }

    function alterHamburgerMeny() {
        if (hamburgerMenu.style.visibility == "hidden") {
            hamburgerMenu.style.visibility = "visible";
            document.getElementById("ham").style.transform = "rotate(90deg)";
            
          } else {
            hamburgerMenu.style.visibility = "hidden";
            document.getElementById("ham").style.transform = "rotate(0deg)";
          }
    }

    function changeLanguage() {
        if (lang[0].alt == "Swedish") {
            for (let i = 0; i < lang.length; i++) {
            lang[i].src = "images/langEN.svg";
            lang[i].alt = "English";
            }
            firstProductButton.innerHTML = "Find out more about us";
        }
        else  {
            for (let i = 0; i < lang.length; i++) {
            lang[i].src = "images/langSE.svg";
            lang[i].alt = "Swedish";
            }
            firstProductButton.innerHTML = "Läs mer om oss";
        }
    }

