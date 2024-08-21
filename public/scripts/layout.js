const duoForm = document.querySelector('.duo-lingo-form')

duoForm.addEventListener('click', (e) => {
	if (e.target.matches('[type="checkbox"]')) {
		let listItem = e.target.closest('li')
		listItem.classList.toggle('checked')
	}
})