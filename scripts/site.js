var hamburgerMenu = document.querySelector('.hamburger');
var userMenu = document.querySelector('.site-header nav .user-menu')
var body = document.querySelector('body')
var close = document.querySelector('.site-header nav button')


hamburgerMenu.addEventListener('click', (event) => {
	userMenu.classList.toggle('slider-open');
})

hamburgerMenu.addEventListener('click', (event) => {
	body.classList.toggle('open-menu');
})