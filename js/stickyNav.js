// Starting and ending position

var lastScrollTop = 0;
let stickyHeader = document.querySelector('#main-topnavHide');

window.addEventListener('scroll', function() {
    var scrollTop = window.scrollY || this.document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        stickyHeader.style.top = '-220px';
    } else {
        stickyHeader.style.top = '0';
    }
    lastScrollTop = scrollTop;
})