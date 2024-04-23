const duoForm = document.querySelector('.duo-lingo-form')

duoForm.addEventListener('click', (event) => {
	if (event.target.matches('[type="checkbox"]')) {
		const listItem = event.target.closest('li')
		listItem.classList.toggle('checked')
	}
})