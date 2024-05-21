import {renderNavLinks, renderSiteHeader} from './site-header.js'
import {renderLoginPage} from './login.js'
import {renderSiteFooter} from './site-footer.js'

const main = document.querySelector('main');
const body = document.querySelector('body');

// renderHeader(main);

function renderPage(pageRenderFunction) {
  renderSiteHeader(main);
  pageRenderFunction(main);
  renderSiteFooter(body);
}

function example(container) {
  container.innerHTML += `
  <section>
    <inner-column>
      <p>This is an example!!</p>
    </inner-column>
  </section>
  `
}

// renderLoginPage(main);

renderPage(example);
