var hamburgerMenu = document.querySelector('.hamburger');
var mastheadNav = document.querySelector('.site-header nav')
var body = document.querySelector('body')
var close = document.querySelector('.site-header nav button')
console.log(mastheadNav)

hamburgerMenu.addEventListener('click', (event) => {
	body.classList.add('open-menu');
	close.classList.remove('visually-hidden');
	close.classList.add('visible');
})

close.addEventListener('click', (event) => {
	body.classList.remove('open-menu');
	close.classList.remove('visible');
	close.classList.add('visually-hidden');
})