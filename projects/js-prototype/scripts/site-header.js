import {attachTemplate} from './find-a-guide.js'
import { state } from './state.js';

function renderHeaderLinks() {
  const links = [
    {
      "href": '#',
      "datalink": 'search',
      "content": 'Search'
    },
    {
      "href": '#',
      "datalink": 'inbox',
      "content": 'Inbox'
    },
    {
      "href": '#',
      "datalink": 'trips',
      "content": 'Trips'
    },
    {
      "href": '#',
      "datalink": 'profile',
      "content": 'Profile'
    }
  ];

  const userMenu = links.map((link) => `
    <li>
      <button type='button' data-link='${link.datalink}'>${link.content}</button>
    </li>
    `).join('')

  return userMenu
}

function renderSiteHeader(container) {
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
  `

  container.insertAdjacentHTML('beforebegin', header);

  // ATTACHING EVENT LISTENERS?! 
  const searchNav = document.querySelector('.site-header button[data-link="search"]')
  const inboxNav = document.querySelector('.site-header button[data-link="inbox"]')
  const tripsNav = document.querySelector('.site-header button[data-link="trips"]')
  const profileNav = document.querySelector('.site-header button[data-link="profile"]')

  attachLinkEventListeners(searchNav, inboxNav, tripsNav, profileNav)
}

/*

window.addEventListener('click', (event) => {
  if (event.target.matches('[data-link]'))
    if (target.dataset.link === 'search') {
  
    }

})

*/

function attachLinkEventListeners(search, inbox, trips, profile) {
  search.addEventListener('click', (event) => {
    attachTemplate(getSearchPage);
    console.log(event);
  });
  inbox.addEventListener('click', (event) => {
    attachTemplate(getInboxPage)
  })
  trips.addEventListener('click', (event) => {
    attachTemplate(getTripsPage);
  })
  profile.addEventListener('click', (event) => {
    attachTemplate(getProfilePage);
  })
}

//TEST PAGES

function getSearchPage(container) {
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

function getTripsPage(container) {
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
  attachLinkEventListeners
}