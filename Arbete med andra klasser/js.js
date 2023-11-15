var images = [
    {name : "name 1", image : "https://www.ikea.com/se/sv/images/products/brimnes-tv-baenk-svart__0851278_pe725293_s5.jpg", text : "Text about object 1"},
    {name : "name 2", image : "https://www.sony.se/image/d871cec13c1b5860e8f2d262b5bd52aa?fmt=pjpeg&wid=1200&hei=470&bgcolor=F1F5F9&bgc=F1F5F9", text : "Text about object 2"},
    {name : "name 3", image : "https://www.elgiganten.se/image/dv_web_D1800010021494660/602695/samsung-85-cu8075-4k-led-smart-tv-2023.jpg", text : "Text about object 3"},
    {name : "name 4", image : "https://www.netonnet.se/GetFile/ProductImage/tv/46-55tum/andersson-qled5531uhda(1023957)_521395_3_Normal_Large-1.jpg", text : "Text about object 4"},
    {name : "name 5", image : "https://images.samsung.com/is/image/samsung/p6pim/se/ue32t4305aexxc/gallery/se-hd-t4300-ue32t4305aexxc-536698408?$650_519_PNG$", text : "Text about object 5"}
];

var maxNum = images.length, imageName = document.getElementsByClassName("imgName"), imageSrc = document.getElementsByClassName("img"),
imgText = document.getElementsByClassName("imgText"), imgDiv = document.getElementsByClassName("imgDiv"),
circleArea1 = document.getElementsByClassName("circleArea1"), circleArea2 = document.getElementsByClassName("circleArea2"),
circleArea3 = document.getElementsByClassName("circleArea3"), circleArea4 = document.getElementsByClassName("circleArea4"),
mail = document.getElementById("mail"), form = document.getElementById("form"), message = document.getElementById("message").innerHTML,
header = document.getElementById("header"), hamburgerMenu = document.getElementById("hamburgerMenu")
;

var numberOfImgDivs = imgDiv.length, randomNumber = Math.floor(Math.random() * (maxNum-(numberOfImgDivs-1)));

changeCircle(circleArea1, 0);
changeCircle(circleArea2, 0);
changeCircle(circleArea3, 0);
changeCircle(circleArea4, 0);
createThreeDivs();
hamburgerMenu.style.visibility = "hidden";


if (message.length == 0) changeNewsLetter(0);

else changeNewsLetter(1);
   
document.addEventListener("scroll", (event) => {
    lastKnownScrollPosition = window.scrollY;
    if (lastKnownScrollPosition >= 700) header.style.backgroundColor = "white";
    else header.style.backgroundColor = "transparent";
})

if (window.innerWidth >= 480) {
    window.addEventListener("resize", checkSize);
}

window.addEventListener("resize", checkSize);

function checkSize() {
   if (window.innerWidth >= 560) {
   createThreeDivs();
}
}

function createThreeDivs () {
    for (let i = 0; i < numberOfImgDivs; i++) {
        imageName[i].innerHTML = images[randomNumber + i].name;
        imageSrc[i].src = images[randomNumber + i].image;
        imgText[i].innerHTML = images[randomNumber + i].text;
    
    }
}


function changeImage(indexChange) {
    if (window.innerWidth < 480) {
        changeOneImage(indexChange);
        return;
    }
    for (let i = 0; i < maxNum; i++) {
        if (imageName[0].innerHTML == images[i].name) {
            if ((i + indexChange) >= 0 && (i + indexChange + numberOfImgDivs) <= maxNum) {
                for (let j = 0; j < numberOfImgDivs; j++) {
            imageName[j].innerHTML = images[i + indexChange + j].name;
            imageSrc[j].src = images[i + indexChange + j].image;
            imgText[j].innerHTML = images[i + indexChange + j].text;
                }
            }
    
        }//if
    }//for

}//function changeImage

/*function changeOneImage(indexChange) {
    for (let i = 0; i < maxNum; i++) {
    if (imageName[1].innerHTML == images[i].name) {
        if ((i + indexChange) >= 0 && (i + indexChange) <= maxNum) {
            imageName[1].innerHTML = images[i + indexChange].name;
            imageSrc[1].src = images[i + indexChange].image;
            imgText[1].innerHTML = images[i + indexChange].text;
            return;
        }
    }
}
}//changeOneImage*/

function changeCircle(area, index) {
    for (let i = 0; i < area.length; i++) {
        area[i].style.backgroundColor = "inherit";
        area[i].style.width = "100%";
        if (i == index) {
            area[i].style.backgroundColor = "black";
            area[i].style.borderRadius = "50%";
            area[i].style.width = "75%";
        }
    
    }//for
    }//changeCircle

    function changeNewsLetter (index) {
        changeCircle(circleArea4, index);
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
        if (hamburgerMenu.style.visibility == "hidden") 
        hamburgerMenu.style.visibility = "visible";

    else hamburgerMenu.style.visibility = "hidden";
    }

   