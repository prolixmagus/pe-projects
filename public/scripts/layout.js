const duoForm = document.querySelector('.duo-lingo-form')

window.addEventListener('click', (event) => {
	if (event.target.matches('[data-set="duo"]')) {
		const listItem = event.target.closest('li')
		listItem.classList.toggle('checked')
	}
})
