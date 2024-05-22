import {renderHeaderLinks, attachLinkEventListeners} from './site-header.js'
import { state } from './state.js';



function renderSiteFooter(container) {
  const footer = ` 
    <footer class='site-footer'>
      <inner-column>
        <nav class='user-menu'>
          <ul>
            ${renderHeaderLinks()}
          </ul>
        </nav>
      </inner-column>
    </footer>
  `
  container.insertAdjacentHTML('afterend', footer);

  const searchNav = document.querySelector('.site-footer button[data-link="search"]')
  const inboxNav = document.querySelector('.site-footer button[data-link="inbox"]')
  const tripsNav = document.querySelector('.site-footer button[data-link="trips"]')
  const profileNav = document.querySelector('.site-footer button[data-link="profile"]')

  attachLinkEventListeners(searchNav, inboxNav, tripsNav, profileNav)
}

export {
	renderSiteFooter
}