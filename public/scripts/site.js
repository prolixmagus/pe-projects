var hamburgerMenu = document.querySelector('.hamburger');
var userMenu = document.querySelector('.site-header nav .user-menu')
var body = document.querySelector('body')
var close = document.querySelector('.site-header nav button')
var main = document.querySelector('main');
var windowCover = document.createElement('div')


hamburgerMenu.addEventListener('click', (event) => {
    userMenu.classList.add('small-menu-open');
    body.classList.add('menu-open')
})

close.addEventListener('click', (event) => {
	userMenu.classList.remove('small-menu-open');
	body.classList.remove('menu-open')
})

window.addEventListener('resize', (event) => {
	userMenu.classList.remove('small-menu-open');
	body.classList.remove('menu-open')
})
