var hamburgerMenu = document.querySelector('.hamburger');
var userMenu = document.querySelector('.site-header nav .user-menu')
var body = document.querySelector('body')
var close = document.querySelector('.site-header nav button')


hamburgerMenu.addEventListener('click', (event) => {
	userMenu.classList.toggle('slider-open');
})

close.addEventListener('click', (event) => {
	body.classList.remove('open-menu');
	close.classList.remove('visible');
	close.classList.add('visually-hidden');
})