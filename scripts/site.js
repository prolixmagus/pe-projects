var hamburgerMenu = document.querySelector('.hamburger');
var userMenu = document.querySelector('.site-header nav .user-menu')
var body = document.querySelector('body')
var close = document.querySelector('.site-header nav button')
var main = document.querySelector('main');
var windowCover = document.createElement('div')


hamburgerMenu.addEventListener('click', (event) => {
    userMenu.classList.add('small-menu-open');
    windowCover.style.position = 'fixed';
    windowCover.style.height = '100%';
    windowCover.style.width = '100%';
    windowCover.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    windowCover.style.zIndex = '1';
    body.style.overflow = 'hidden';
    body.appendChild(windowCover)
})

close.addEventListener('click', (event) => {
	userMenu.classList.remove('small-menu-open');
	body.removeChild(windowCover);
	body.style.overflow = 'auto';
})

window.addEventListener('resize', (event) => {
	userMenu.classList.remove('small-menu-open');
	body.removeChild(windowCover);
	body.style.overflow = 'auto';
})
