import { renderSiteHeader, renderNavLinks, attachLinkEventListeners, getInboxView, getProfileView } from './site-header.js'
import { attachTemplate } from './find-a-guide.js'
import { renderSiteFooter } from './site-footer.js'
import { renderLoginView } from './login.js'
import { getTourSearchView } from './search.js'
import { getTripsListView } from './trips.js'

let state = {
	login: false
}

function saveState() {
	localStorage.setItem('login', JSON.stringify(state))
}

function loadState() {
	const loginStatus = localStorage.getItem('login');
	if (loginStatus) {
		state = JSON.parse(loginStatus);
	}
}

function saveCurrentView(view) {
	localStorage.setItem('currentView', view);
	state.login = true;
}

function getCurrentView() {
	return localStorage.getItem('currentView');
}

function renderSavedView(view) {
	const main = document.querySelector('main');
	main.innerHTML = ``;

	switch (view) {
		case 'search':
			renderSiteHeader(main);
			attachTemplate(getTourSearchView);
			renderSiteFooter(main);
			break;
		case 'trips':
			renderSiteHeader(main);
			attachTemplate(getTripsListView);
			renderSiteFooter(main);
			break;
		case 'inbox':
			renderSiteHeader(main);
			attachTemplate(getInboxView);
			renderSiteFooter(main);
			break;
		case 'profile':
			renderSiteHeader(main);
			attachTemplate(getProfileView);
			renderSiteFooter(main);
			break;
		case 'login':
			renderSiteHeader(main);
			attachLinkEventListeners();
			renderLoginView(main);
			renderSiteFooter(main);
			break;
		default:
	      renderSiteHeader(main);
	      renderLoginView(main);
	      renderSiteFooter(main);
      break;
	}
}



export {
	saveCurrentView,
	getCurrentView,
	renderSavedView,
	state,
	loadState,
	saveState
}


