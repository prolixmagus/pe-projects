import { attachTemplate } from './find-a-guide.js';
import { state, loadState, saveState } from './state.js';
import { renderLoginView, handleLogin, validate } from './login.js';
import { renderSiteFooter } from './site-footer.js';
import { getTourSearchView } from './search.js';
import { getTripsListView } from './trips.js';

function renderNavLinks() {

  if (state.login === true) {

    //filter header links when logged in

    let userMenu = `
      <li>
        <button class='nav-button nav-login' type='button' data-link='logoutroute'>Logout</button>
      </li>
    `;

    return userMenu;

  } else {

    //filter header links when not logged in
    let userMenu =`
      <li>
        <button class='nav-button nav-login' type='button' data-link='loginroute'>Login</button>
      </li>
    `;

    return userMenu;
  }
}

function renderSiteHeader(container) {
  const currentHeader = document.querySelector('.site-header')
  if (currentHeader) {
    currentHeader.remove();
  }
  const header = ` 
    <header class='site-header'>
      <inner-column>
        <mast-head>
          <logo-container>
            <div class='temp-icon'>
              <svg viewBox='0 0 10 10'>
                <circle cx='5' cy='5' r='5' />
              </svg>
            </div>
            <h1 class>Find-A-Guide</h1>
          </logo-container>
          <nav class='user-menu'>
            <ul>
              ${renderNavLinks()}
            </ul>
          </nav>
        </mast-head>
      </inner-column>
    </header>
  `;

  container.insertAdjacentHTML('beforebegin', header);

}

function attachLinkEventListeners() {
  window.addEventListener('click', (event) => {

    if (event.target.matches('[data-link]')) {
      const main = document.querySelector('main');

      if (event.target.dataset.link === 'search') {
        // attachTemplate(getTourSearchView);
        navigateTo('search')
      }
      if (event.target.dataset.link === 'inbox') {
        // attachTemplate(getInboxView);
        navigateTo('inbox')
      }
      if (event.target.dataset.link === 'trips') {
        // attachTemplate(getTripsListView);
        navigateTo('trips')
      }
      if (event.target.dataset.link === 'profile') {
        // attachTemplate(getProfileView);
        navigateTo('profile');
      }
      if (event.target.dataset.link === 'logoutroute') {
        state.login = false;
        state.currentView = 'login';
        saveState();
        localStorage.removeItem('currentUser')
        
        main.innerHTML = ''

        renderSiteHeader(main);
        attachLinkEventListeners();
        renderLoginView(main);
        renderSiteFooter(main);
      }
      if (event.target.dataset.link === 'loginroute') {
        handleLogin();
      }
      renderSiteFooter(main);
    }
  })
}

function toggle(element) {
  const selectedElement = document.querySelector(element);
  selectedElement.classList.toggle('visually-hidden');
}

//navigation render 'router'

function navigateTo(view) {
  state.currentView = view;
  saveState();
  renderView(view);
}

function renderView(view) {
  const main = document.querySelector('main');
  main.innerHTML = '';

  switch (view) {
    case 'search':
      getTourSearchView(main);
      break;
    case 'inbox':
      getInboxView(main);
      break;
    case 'trips':
      getTripsListView(main);
      break;
    case 'profile':
      getProfileView(main);
      break;
    case 'login':
    default:
      renderLoginView(main);
      break;
  }
}

//TEST PAGES


function getProfileView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <h2>Profile Page</h2>
      <p>This will be a user profile page!</p>
    </inner-column>
  </section>
  `
}

function getInboxView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <h2>Inbox</h2>
      <p>This is the inbox page! You will be able to view and send messages to your personal tour guide.</p>
    </inner-column>
  </section>
  `
}

export {
	renderNavLinks,
	renderSiteHeader,
  attachLinkEventListeners,
  getTourSearchView,
  renderView,
  getInboxView,
}