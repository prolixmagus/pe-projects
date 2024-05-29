let state = {
	login: false,
	currentView: 'login'
}

function saveState() {
	localStorage.setItem('state', JSON.stringify(state))
}

function loadState() {
	const savedState = JSON.parse(localStorage.getItem('state'))
	if (savedState) {
		// merge localStorage state with global state
		state = {...state, login: savedState.login, currentView: savedState.currentView}
	}
	console.log(state);
}

export {
	state,
	loadState,
	saveState
}