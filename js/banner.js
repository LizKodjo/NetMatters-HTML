let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName('banner-image');
    let dots = document.getElementsByClassName('dot');

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots[i].length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000);
}



// Mobile nav

function openNav() {
    document.getElementById("mySidenav").style.width = "275px";
    document.getElementById("main").style.marginLeft = "-275px";
    document.getElementsByTagName("body").margineLeft = "-250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft ="0";
    document.getElementsByTagName("body").style.marginLeft = "0";
}