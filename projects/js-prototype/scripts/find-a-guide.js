import { renderSiteHeader, attachLinkEventListeners, renderView } from './site-header.js';
import { renderLoginView, attachLoginFormEventListener } from './login.js';
import { renderSiteFooter } from './site-footer.js';
import { state, loadState, saveState } from './state.js';
import { getTourSearchView } from './search.js';
// import { getTripsListView } from './trips.js'

const main = document.querySelector('main');
const body = document.querySelector('body');

function attachTemplate(template) {
  const main = document.querySelector('main');
  return template(main);
}

function generateList(list) {
  return list.map((item) => `<li>${item}</li>`).join('')
}

function initialize() {
  loadState();
  const main = document.querySelector('main')
  main.innerHTML = '';
  renderSiteHeader(main);
  renderView(state.currentView);
  renderSiteFooter(main);
}

  // getTripsListView(main);
// switch out while working on styles for pages to address refresh issue


initialize();

export {
  attachTemplate,
  generateList,
  initialize
}
