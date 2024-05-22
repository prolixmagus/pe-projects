import { attachTemplate } from './find-a-guide.js'
import { state } from './state.js';
import { renderLoginPage, handleLogin, validate } from './login.js';

function renderHeaderLinks() {
  const links = [
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

  if (state.login === true) {

    //filter header links when logged in

    let userMenu = links.map((link) => `
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
              ${renderHeaderLinks()}
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
        attachTemplate(getTourSearchPage);
      }
      if (event.target.dataset.link === 'inbox') {
        attachTemplate(getInboxPage);
      }
      if (event.target.dataset.link === 'trips') {
        attachTemplate(getTripsListPage);
      }
      if (event.target.dataset.link === 'profile') {
        attachTemplate(getProfilePage);
      }
      if (event.target.dataset.link === 'logoutroute') {
        state.login = false;
        main.innerHTML = ''
        renderSiteHeader(main)
        attachLinkEventListeners();
        renderLoginPage(main);
      }
      if (event.target.dataset.link === 'loginroute') {
        handleLogin();
      }
    }
  })
}

//TEST PAGES

function getTourSearchPage(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the search page</p>
    </inner-column>
  </section>
  `
}

function getProfilePage(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the profile page</p>
    </inner-column>
  </section>
  `
}

function getInboxPage(container) {
  container.innerHTML = ``

  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is the inbox page</p>
    </inner-column>
  </section>
  `
}

function getTripsListPage(container) {
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
	renderHeaderLinks,
	renderSiteHeader,
  attachLinkEventListeners,
  getTourSearchPage
}