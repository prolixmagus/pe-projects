import {renderNavLinks} from './site-header.js'

function renderSiteFooter(container) {
  container.innerHTML += ` 
    <footer class='site-footer'>
      <inner-column>
        <nav class='user-menu'>
          <ul>
            ${renderNavLinks()}
          </ul>
        </nav>
      </inner-column>
    </footer>
  `
}

export {
	renderSiteFooter
}