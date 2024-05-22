import { renderSiteHeader, attachLinkEventListeners } from './site-header.js';
import { renderLoginPage, attachLoginEventListener } from './login.js';
import { renderSiteFooter } from './site-footer.js';
import { state } from './state.js';

const main = document.querySelector('main');
const body = document.querySelector('body');

function renderPageSkeleton() {
  const main = document.querySelector('main')
  main.innerHTML = '';
  renderSiteHeader(main);
  renderSiteFooter(main);
}

function attachTemplate(template) {
  const main = document.querySelector('main');
  return template(main);
}

function initialize() {
  const main = document.querySelector('main')
  main.innerHTML = '';
  renderPageSkeleton();
  renderLoginPage(main);
}

initialize();

export {
  attachTemplate
}
