import { getUserData, getCurrentUserData } from './login.js'
import { tours } from './data.js'
import { getTourById } from './tour-detail.js'

function handleRenderPaymentView() {
}

window.addEventListener('click', (event) => {
	if (event.target.matches('[data-action="book-tour"]')) {
		event.preventDefault()
      handleRenderPaymentView()
   }
})

export {
	handleRenderPaymentView
}