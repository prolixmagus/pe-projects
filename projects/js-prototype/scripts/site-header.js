import { attachTemplate } from './find-a-guide.js'
import { state } from './state.js';
import { renderLoginView, handleLogin, validate } from './login.js';
import { renderSiteFooter } from './site-footer.js'
import { getTourSearchView } from './search.js'

const siteHeaderLinks = [
    {
      datalink: 'search',
      content: 'Search',
      public: true
    },
    {
      datalink: 'inbox',
      content: 'Inbox',
      public: true
    },
    {
      datalink: 'trips',
      content: 'Trips',
      public: true
    },
    {
      datalink: 'profile',
      content: 'Profile',
      public: true
    }
  ];

function renderNavLinks(menu) {

  if (state.login === true) {

    //filter header links when logged in

    let userMenu = menu.map((link) => `
      <li>
        <button type='button' data-link='${link.datalink}'>${link.content}</button>
      </li>
    `).join('');

    userMenu += `
      <li>
        <button type='button' data-link='logoutroute'>Logout</button>
      </li>
    `;

    return userMenu;

  } else {

    //filter header links when not logged in
    let userMenu =`
      <li>
        <button type='button' data-link='loginroute'>Login</button>
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
            <h1>Find-A-Guide</h1>
          </logo-container>
          <nav class='user-menu'>
            <ul>
              ${renderNavLinks(siteHeaderLinks)}
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
        attachTemplate(getTourSearchView);
      }
      if (event.target.dataset.link === 'inbox') {
        attachTemplate(getInboxView);
      }
      if (event.target.dataset.link === 'trips') {
        attachTemplate(getTripsListView);
      }
      if (event.target.dataset.link === 'profile') {
        attachTemplate(getProfileView);
      }
      if (event.target.dataset.link === 'logoutroute') {
        state.login = false;
        main.innerHTML = ''
        localStorage.removeItem('currentUser')
        renderSiteHeader(main)
        attachLinkEventListeners();
        renderLoginView(main);
        renderSiteFooter(main);
      }
      if (event.target.dataset.link === 'loginroute') {
        handleLogin();
      }
    }
  })
}

//TEST PAGES


function getProfileView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the profile page</p>
    </inner-column>
  </section>
  `
}

function getInboxView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the inbox page</p>
    </inner-column>
  </section>
  `
}

function getTripsListView(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the trips page</p>
    </inner-column>
  </section>
  `
}

export {
	renderNavLinks,
	renderSiteHeader,
  attachLinkEventListeners,
  getTourSearchView
}