var images = [
    {name : "name 1", image : "https://www.ikea.com/se/sv/images/products/brimnes-tv-baenk-svart__0851278_pe725293_s5.jpg", text : "Text about object 1"},
    {name : "name 2", image : "https://www.sony.se/image/d871cec13c1b5860e8f2d262b5bd52aa?fmt=pjpeg&wid=1200&hei=470&bgcolor=F1F5F9&bgc=F1F5F9", text : "Text about object 2"},
    {name : "name 3", image : "https://www.elgiganten.se/image/dv_web_D1800010021494660/602695/samsung-85-cu8075-4k-led-smart-tv-2023.jpg", text : "Text about object 3"},
    {name : "name 4", image : "https://www.netonnet.se/GetFile/ProductImage/tv/46-55tum/andersson-qled5531uhda(1023957)_521395_3_Normal_Large-1.jpg", text : "Text about object 4"},
    {name : "name 5", image : "https://images.samsung.com/is/image/samsung/p6pim/se/ue32t4305aexxc/gallery/se-hd-t4300-ue32t4305aexxc-536698408?$650_519_PNG$", text : "Text about object 5"}
];

var maxNum = images.length, imageName = document.getElementsByClassName("imgName"), imageSrc = document.getElementsByClassName("img"),
imgText = document.getElementsByClassName("imgText"), imgDiv = document.getElementsByClassName("imgDiv");

var numberOfImgDivs = imgDiv.length, randomNumber = Math.floor(Math.random() * (maxNum-(numberOfImgDivs-1)));

createThreeDivs();

if (window.innerWidth >= 480) {
    window.addEventListener("resize", checkSize);
}

window.addEventListener("resize", checkSize);

function checkSize() {
   if (window.innerWidth >= 480)
   createThreeDivs();
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

function changeOneImage(indexChange) {
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
}//changeOneImage