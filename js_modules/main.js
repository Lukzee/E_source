var moda = document.getElementById("maiModa");
var close = document.getElementsByClassName("close")[0];

// instantiate login and reg frm
var frm1 = document.getElementById("lfrm");
var frm2 = document.getElementById("sfrm");

// click login btn
function showlog() {
    moda.style.display = "block";
    frm2.style.display = "none";
    frm1.style.display = "block";
}

// click register btn
function showreg() {
    moda.style.display = "block";
    frm1.style.display = "none";
    frm2.style.display = "block";
}

// modal cancel btn
close.onclick = function(){
    moda.style.display = "none";
}

// when anywhere outside moda
window.onclick = function(event) {
    if(event.target == moda) {
        moda.style.display = "block";
    }
}

// go signup frm btn
function gosfrm() {
    frm1.style.display = "none";
    frm2.style.display = "block";
}

// go login frm btn
function golfrm() {
    frm2.style.display = "none";
    frm1.style.display = "block";
}

// Regex
function numonly(input) {
    var regex = /[^0-9/a-z]/gi;
    input.value = input.value.replace(regex, "");
}

// toggle "choose level"
function action() {
    var choose = document.querySelector("div#choose");

    if(choose.style.display === "block"){
        choose.style.display = "none";
    } else {
        choose.style.display = "block";
    }
}

// toggle "classes"
function actn2() {
    var choose = document.querySelector("div#chsn1");
    var icn1 = document.querySelector("i#rt2a");
    var icn = document.querySelector("i#rt2");
    
    if(choose.style.display === "block"){
        choose.style.display = "none";
        icn.style.display ="none";
        icn1.style.display = "block";
    } else {
        choose.style.display = "block";
        icn1.style.display = "none";
        icn.style.display = "block";
    }
}

function actn3() {
    var choose = document.querySelector("div#chsn2");
    var icn1 = document.querySelector("i#rt3a");
    var icn = document.querySelector("i#rt3");
    
    if(choose.style.display === "block"){
        choose.style.display = "none";
        icn.style.display ="none";
        icn1.style.display = "block";
    } else {
        choose.style.display = "block";
        icn1.style.display = "none";
        icn.style.display = "block";
    }
}

function actn4() {
    var choose = document.querySelector("div#chshn1");
    var icn1 = document.querySelector("i#rt4a");
    var icn = document.querySelector("i#rt4");
    
    if(choose.style.display === "block"){
        choose.style.display = "none";
        icn.style.display ="none";
        icn1.style.display = "block";
    } else {
        choose.style.display = "block";
        icn1.style.display = "none";
        icn.style.display = "block";
    }
}

function actn5() {
    var choose = document.querySelector("div#chshn2");
    var icn1 = document.querySelector("i#rt5a");
    var icn = document.querySelector("i#rt5");
    
    if(choose.style.display === "block"){
        choose.style.display = "none";
        icn.style.display ="none";
        icn1.style.display = "block";
    } else {
        choose.style.display = "block";
        icn1.style.display = "none";
        icn.style.display = "block";
    }
}

// learning materials
// nd1 first sem
function nd1f() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#nd1f");

    level.style.display = "none";
    sem.style.display = "block";
}

//nd1 second sem
function nd1s() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#nd1s");

    level.style.display = "none";
    sem.style.display = "block";
}

// nd2 first sem
function nd2f() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#nd2f");

    level.style.display = "none";
    sem.style.display = "block";
}

// nd2 second sem
function nd2s() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#nd2s");

    level.style.display = "none";
    sem.style.display = "block";
}

// hnd1 first sem
function hnd1f() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#hnd1f");

    level.style.display = "none";
    sem.style.display = "block";
}

// hnd1 second sem
function hnd1s() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#hnd1s");

    level.style.display = "none";
    sem.style.display = "block";
}

// hnd2 first sem
function hnd2f() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#hnd2f");

    level.style.display = "none";
    sem.style.display = "block";
}

// hnd2 second sem
function hnd2s() {
    var level = document.querySelector("div#sectn");
    var sem = document.querySelector("div#hnd2s");

    level.style.display = "none";
    sem.style.display = "block";
}
