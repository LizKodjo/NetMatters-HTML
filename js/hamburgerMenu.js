const hamMenu = document.querySelector('.hamburger-menu');
const moveScreen = document.querySelector('#outermain');

// Transform menu button when clicked
hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');

    // moveScreen.classList.toggle('active');
});