import {renderNavLinks, attachLinkEventListeners} from './site-header.js'
import { state, getCurrentView } from './state.js';

  const siteFooterLinks = [
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


function renderSiteFooter(container) {
  const currentFooter = document.querySelector('.site-footer')
  if (currentFooter) {
    currentFooter.remove();
  }
  const footer = ` 
    <footer class='site-footer'>
      <inner-column>
        <nav class='user-menu'>
          <ul>
            ${renderSiteFooterLinks(siteFooterLinks)}
          </ul>
        </nav>
      </inner-column>
    </footer>
  `
  container.insertAdjacentHTML('afterend', footer);

  attachLinkEventListeners()
}

function renderSiteFooterLinks(menu) {
  
  if (state.login === true) {

    let userMenu = menu.map((link) => `
      <li>
        <button type='button' data-link='${link.datalink}'>${link.content}</button>
      </li>
    `).join('');

    return userMenu;

  } else {

    let userMenu =`<h2>Welcome!</h2>`

    return userMenu;
  }
}


export {
	renderSiteFooter,
  renderSiteFooterLinks
}