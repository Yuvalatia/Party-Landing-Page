


// VARS - usable
var pics = ["imgs/pic1.jpg","imgs/pic2.jpg","imgs/pic3.jpg"]
var counter = 0;

// get Elements from page
var img = document.getElementById("pict");

//Arrrows
document.getElementById("left-arrow").addEventListener("click",function () {
    console.log(counter);
    switch(counter){
        case 0:
            counter = 2;
            img.style.backgroundImage = "url("+ pics[2]+ ")";
            break;
        case 1:
            counter--;
            img.style.backgroundImage = "url("+ pics[0]+ ")";
            break;
        case 2:
            counter--;
            img.style.backgroundImage = "url("+ pics[1]+ ")";
            break;
    }

});
document.getElementById("right-arrow").addEventListener("click",function () {
    switch(counter){
        case 0:
            counter++;
            img.style.backgroundImage = "url("+ pics[1]+ ")";
            break;
        case 1:
            counter++;
            img.style.backgroundImage = "url("+ pics[2]+ ")";
            break;
        case 2:
            counter = 0;
            img.style.backgroundImage = "url("+ pics[0]+ ")";
            break;
    }

});