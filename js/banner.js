


// Mobile nav

function openNav() {
    // document.getElementById("mySidenav").style.width = "275px";
    document.getElementById("outermain").style.right = "275px";
    // document.getElementsByTagName("body").style.margineLeft = "-250px";
}

function closeNav() {
    // document.getElementById("mySidenav").style.width = "0";
    document.getElementById("outermain").style.right = "0";
    // document.getElementsByTagName("body").style.marginLeft = "0";
}



// Tablet nav

function openTabNav() {
    // document.getElementById("tabSidenav").style.width = "275px";
    document.getElementById("outermain").style.right = "275px";
}

function closeTabNav() {
    // document.getElementById("tabSidenav").style.width = "0";
    document.getElementById("outermain").style.right = "0";
}

// Sticky header

// When user scrolls

// window.onscroll = function () { myFunction() };

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("main-topnavHide").style.top = "0";
    } else {
        document.getElementById("main-topnavHide").style.top = "-220px";
    }
}




function testHeader() {
    $("#main-topnav").slideDown();
}

// side nav
// window.onload = function () {
    const menu_btn = document.querySelector('.hamburger');
    const mobile_nav = document.querySelector('.sidenav');

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_nav.classList.toggle('is-active');
    });
// }

// Clients tooltip script

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Creating cookie
// Function to create cookie
setCookie = (cName, cValue, expDays) => {
    let date = new Date();
    // calculate date
    date.setTime(date.getTime() + (expDays * 24 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    // create and save cookie at root
    document.cookie = cName + "=" + cValue + ";" + expires + "; path=/";
}

// Function to check if cookie is available
getCookie = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split("; ");

    let value;
    cArr.forEach(val => {
        if(val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;

}

// Message disappeares when cookie is accepted
document.querySelector('#acceptcookie').addEventListener("click", () => {
    document.querySelector("#myModal").style.display = "none";

    setCookie("cookieLiz", true, 10);
})

// check cookie

cookieMessage = () => {
    if (!getCookie("cookieLiz"))
    document.querySelector('#myModal').style.display = "block";
}
window.addEventListener("load", cookieMessage);