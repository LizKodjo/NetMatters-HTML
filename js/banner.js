


// Mobile nav

function openNav() {
    document.getElementById("mySidenav").style.width = "275px";
    document.getElementById("main").style.marginLeft = "-275px";
    document.getElementsByTagName("body").margineLeft = "-250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsByTagName("body").style.marginLeft = "0";
}

// Tablet nav

function openTabNav() {
    document.getElementById("tabSidenav").style.width = "275px";
    document.getElementById("main").style.marginLeft = "-275px";
}

function closeTabNav() {
    document.getElementById("tabSidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
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



// // Get the header
// var header = document.getElementById("main-topnav");

// // Get the offset position

// var sticky = header.offsetTop;

// // Add sticky class to the header when you reach its scroll position

// function myFunction() {
//     if (window.scrollY > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }

function testHeader() {
    $("#main-topnav").slideDown();
}

// side nav
window.onload = function () {
    const menu_btn = document.querySelector('.hamburger');
    const mobile_nav = document.querySelector('.sidenav');

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_nav.classList.toggle('is-active');
    });
}