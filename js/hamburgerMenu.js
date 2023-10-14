const hamMenu = document.querySelector('.hamburger-menu');
const moveScreen = document.querySelector('.outermain');
const smallMenu = document.querySelector('.burger-menu');
let hideMenu = document.querySelector('.hiddenBurger.menu');

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

// Second hidden devices
// hideMenu.addEventListener('click', () => {
//     hideMenu.classList.toggle('active');

//     // moveScreen.classList.toggle('active');
// });