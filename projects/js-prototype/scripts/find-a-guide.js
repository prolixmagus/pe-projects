import { renderSiteHeader, attachLinkEventListeners } from './site-header.js';
import { renderLoginView, attachLoginFormEventListener } from './login.js';
import { renderSiteFooter } from './site-footer.js';
import { state, saveCurrentView, getCurrentView, renderSavedView, loadState } from './state.js';


const main = document.querySelector('main');
const body = document.querySelector('body');

function attachTemplate(template) {
  const main = document.querySelector('main');
  return template(main);
}

function generateList(list) {
  return list.map((item) => `<li>${item}</li>`).join('')
}

function navigateTo(view) {
  saveCurrentView(view);
  renderSavedView(view);
}

function initialize() {
  loadState();
  const currentView = getCurrentView() || 'login';
  renderSavedView(currentView);
}

initialize();

export {
  attachTemplate,
  generateList,
  initialize,
  navigateTo
}
