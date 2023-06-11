
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dot-active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " dot-active";
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}

window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle('sticky', window.scrollY > 0)
});

function header() {
    var header = document.querySelector("header");
    header.className = "header-next";
}



function toggleadministrators() {

    var display = document.getElementById("admin");
    display.className = "child-container";

    var display = document.getElementById("candidate");
    display.className = "child-container-disable";

    var display = document.getElementById("party");
    display.className = "child-container-disable";

    var display = document.getElementById("position");
    display.className = "child-container-disable";

    var display = document.getElementById("result");
    display.className = "child-container-disable";

    var display = document.getElementById("voter");
    display.className = "child-container-disable";


    var active = document.getElementById("adminchild");
    active.className = "active-child";

    var active = document.getElementById("candidatechild");
    active.classList.remove("active-child");

    var active = document.getElementById("partychild");
    active.classList.remove("active-child");

    var active = document.getElementById("positionchild");
    active.classList.remove("active-child");

    var active = document.getElementById("resultchild");
    active.classList.remove("active-child");

    var active = document.getElementById("voterchild");
    active.classList.remove("active-child");
}

function togglecandidates() {

    var display = document.getElementById("candidate");
    display.className = "child-container";

    var display = document.getElementById("admin");
    display.className = "child-container-disable";

    var display = document.getElementById("party");
    display.className = "child-container-disable";

    var display = document.getElementById("position");
    display.className = "child-container-disable";

    var display = document.getElementById("result");
    display.className = "child-container-disable";

    var display = document.getElementById("voter");
    display.className = "child-container-disable";


    var active = document.getElementById("candidatechild");
    active.className = "active-child";

    var active = document.getElementById("adminchild");
    active.classList.remove("active-child");

    var active = document.getElementById("partychild");
    active.classList.remove("active-child");

    var active = document.getElementById("positionchild");
    active.classList.remove("active-child");

    var active = document.getElementById("resultchild");
    active.classList.remove("active-child");

    var active = document.getElementById("voterchild");
    active.classList.remove("active-child");
}

function toggleparties() {

    var display = document.getElementById("party");
    display.className = "child-container";

    var display = document.getElementById("admin");
    display.className = "child-container-disable";

    var display = document.getElementById("candidate");
    display.className = "child-container-disable";

    var display = document.getElementById("position");
    display.className = "child-container-disable";

    var display = document.getElementById("result");
    display.className = "child-container-disable";

    var display = document.getElementById("voter");
    display.className = "child-container-disable";


    var active = document.getElementById("partychild");
    active.className = "active-child";

    var active = document.getElementById("adminchild");
    active.classList.remove("active-child");

    var active = document.getElementById("candidatechild");
    active.classList.remove("active-child");

    var active = document.getElementById("positionchild");
    active.classList.remove("active-child");

    var active = document.getElementById("resultchild");
    active.classList.remove("active-child");

    var active = document.getElementById("voterchild");
    active.classList.remove("active-child");
}

function togglepositions() {

    var display = document.getElementById("position");
    display.className = "child-container";

    var display = document.getElementById("admin");
    display.className = "child-container-disable";

    var display = document.getElementById("candidate");
    display.className = "child-container-disable";

    var display = document.getElementById("party");
    display.className = "child-container-disable";

    var display = document.getElementById("result");
    display.className = "child-container-disable";

    var display = document.getElementById("voter");
    display.className = "child-container-disable";


    var active = document.getElementById("positionchild");
    active.className = "active-child";

    var active = document.getElementById("adminchild");
    active.classList.remove("active-child");

    var active = document.getElementById("candidatechild");
    active.classList.remove("active-child");

    var active = document.getElementById("partychild");
    active.classList.remove("active-child");

    var active = document.getElementById("resultchild");
    active.classList.remove("active-child");

    var active = document.getElementById("voterchild");
    active.classList.remove("active-child");
}

function toggleresults() {

    var display = document.getElementById("result");
    display.className = "child-container";

    var display = document.getElementById("admin");
    display.className = "child-container-disable";

    var display = document.getElementById("candidate");
    display.className = "child-container-disable";

    var display = document.getElementById("party");
    display.className = "child-container-disable";

    var display = document.getElementById("position");
    display.className = "child-container-disable";

    var display = document.getElementById("voter");
    display.className = "child-container-disable";


    var active = document.getElementById("resultchild");
    active.className = "active-child";

    var active = document.getElementById("adminchild");
    active.classList.remove("active-child");

    var active = document.getElementById("candidatechild");
    active.classList.remove("active-child");

    var active = document.getElementById("partychild");
    active.classList.remove("active-child");

    var active = document.getElementById("positionchild");
    active.classList.remove("active-child");

    var active = document.getElementById("voterchild");
    active.classList.remove("active-child");
}

function togglevoters() {

    var display = document.getElementById("voter");
    display.className = "child-container";

    var display = document.getElementById("admin");
    display.className = "child-container-disable";

    var display = document.getElementById("candidate");
    display.className = "child-container-disable";

    var display = document.getElementById("party");
    display.className = "child-container-disable";

    var display = document.getElementById("position");
    display.className = "child-container-disable";

    var display = document.getElementById("result");
    display.className = "child-container-disable";


    var active = document.getElementById("voterchild");
    active.className = "active-child";

    var active = document.getElementById("adminchild");
    active.classList.remove("active-child");

    var active = document.getElementById("candidatechild");
    active.classList.remove("active-child");

    var active = document.getElementById("partychild");
    active.classList.remove("active-child");

    var active = document.getElementById("positionchild");
    active.classList.remove("active-child");

    var active = document.getElementById("resultchild");
    active.classList.remove("active-child");
}

function toggleadminregpopup() {
    var popup = document.getElementById("adminreg");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglecandidateregpopup() {
    var popup = document.getElementById("candidatereg");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglepartyregpopup() {
    var popup = document.getElementById("partyreg");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglepositionregpopup() {
    var popup = document.getElementById("positionreg");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglevoterregpopup() {
    var popup = document.getElementById("voterreg");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function toggleadminprofilepopup() {
    var popup = document.getElementById("adminprofile");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function toggleadminpasswordchangepopup() {
    var popup = document.getElementById("adminpasswordchange");
    popup.classList.toggle("active-reg-popup");
}

function togglevoterprofilepopup() {
    var popup = document.getElementById("voterprofile");
    popup.classList.toggle("active-reg-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglevoterpasswordchangepopup() {
    var popup = document.getElementById("voterpasswordchange");
    popup.classList.toggle("active-reg-popup");
}

function toggleadminloginpopup() {
    var popup = document.getElementById("adminlogin");
    popup.classList.toggle("active-login-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglevoterloginpopup() {
    var popup = document.getElementById("voterlogin");
    popup.classList.toggle("active-login-popup");

    var popup = document.getElementById("shader");
    popup.classList.toggle("active-shader");
}

function togglecandidatecolumnactive() {
    var popup = document.getElementById("candidatecolumn");
    popup.classList.toggle("candidate-column-active");
}


