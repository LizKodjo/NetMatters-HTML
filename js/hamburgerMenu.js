const hamMenu = document.querySelector('.hamburger-menu');
const moveScreen = document.querySelector('.outermain');
const smallMenu = document.querySelector('.burger-menu');
let hideMenu = document.querySelector('.hiddenBurger.menu');
const lgMenu = document.querySelector('.hamburger-menu-lg');
const sidebar = document.querySelector('sidebar');

// Transform menu button when clicked
hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');
    moveScreen.classList.toggle('active');
});

// Small devices burger menu
smallMenu.addEventListener('click', () => {
    smallMenu.classList.toggle('active');
    moveScreen.classList.toggle('active');

});

//  Devices larger than 992px
lgMenu.addEventListener('click', () => {
    lgMenu.classList.toggle('active');
    moveScreen.classList.toggle('active');
});

// Close side nav by clicking anywhere on the page
document.onclick = function (e) {
    if (moveScreen.contains(e.target) && !smallMenu.contains(e.target)
        && !hamMenu.contains(e.target) && !lgMenu.contains(e.target)) {
        moveScreen.classList.remove('active');
        smallMenu.classList.remove('active');
        hamMenu.classList.remove('active');
        lgMenu.classList.remove('active');

    }
}



