

/* --- Image Gallery --- */
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
    /* --- Text hover --- */
    var mainText = document.getElementsByClassName("content")[0];
    mainText.addEventListener("mouseover",function () {
        mainText.style.fontSize = "17px";
    });
    mainText.addEventListener("mouseout",function () {
        mainText.style.fontSize = "16px";
    });

    /* --- Table hover --- */
    table = document.getElementsByTagName("td");
    for(let i=0; i<table.length; i++){

        table[i].addEventListener("mouseover", function () {
            table[i].style.backgroundColor = "white";
        });
        table[i].addEventListener("mouseout", function () {
            table[i].style.backgroundColor = "";
        });

    }

    /* --- Form Checked --- */

// val helpers
let letters =  /^[A-Za-z]+$/;
let numbers = /^[0-9]+$/;
let hebrow = /[\u0590-\u05FF]/;
// inputs
let name = document.getElementById("name");
let prefnum = document.getElementById("prePhoneNumber");
let fnum = document.getElementById("phoneNumber");
let gnum = document.getElementById("numOfGuests");
let textarea = document.getElementById("comment");
let email = document.getElementById("email");


function valForm(){
    // var for check if every input is working fine
    let allGood = true;
    // Full name Validation
    if(!name.value.match(letters) || name.value == ""){
        allGood = false;
        name.classList.add("is-invalid");
    }else{
        name.classList.remove("is-invalid");
    }
    // prePhone number Validation
    if(!prefnum.value.match(numbers) || !(prefnum.value.length === 3) || prefnum.value == ""){
        allGood = false;
        prefnum.classList.add("is-invalid");
    }else{
        prefnum.classList.remove("is-invalid");
    }
    // phone Number Validation
    if(!fnum.value.match(numbers) || !(fnum.value.length > 6 && fnum.value.length < 8) || fnum.value == ""){
        allGood = false;
        fnum.classList.add("is-invalid");
    }else{
        fnum.classList.remove("is-invalid");
    }
    if(!gnum.value.match(numbers) || !(gnum.value > 0) || gnum.value == ""){
        allGood = false;
        gnum.classList.add("is-invalid");
    }else{
        gnum.classList.remove("is-invalid");
    }
    // textarea Validation
    if(textarea.value.length > 200){
        allGood = false;
        textarea.classList.add("is-invalid");
    }else{
        textarea.classList.remove("is-invalid");
    }
    // Email Validation
    if(email.value == ""){
        allGood = false;
        email.classList.add("is-invalid");
    }else{
        email.classList.remove("is-invalid");
    }

    if(allGood){
        window.alert("Thanks, Payment passed successfully...");
    }

    return allGood;

}
// Text area - letters counter
textarea.onkeyup = function () {
    document.getElementById("commentHelp").innerHTML = (200 - this.value.length) + " :מספר תווים שנשאר "
};

    /* --- Modal Settings --- */
let modal = document.getElementsByClassName("modal-bg")[0];
document.getElementById("contact-link").addEventListener("click",function () {
    modal.style.display = "flex";
});
document.getElementById("close").addEventListener("click", function () {
    modal.style.display = "none";
});


document.getElementsByTagName("body")[0].addEventListener("mouseleave", function () {
    window.alert("Pre tickets ending soon...")
});

