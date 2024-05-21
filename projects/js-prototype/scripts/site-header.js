function renderNavLinks() {
  const links = [
    {
      "href": '#',
      "dataset": 'search',
      "content": 'Search'
    },
    {
      "href": '#',
      "dataset": 'inbox',
      "content": 'Inbox'
    },
    {
      "href": '#',
      "dataset": 'trips',
      "content": 'Trips'
    },
    {
      "href": '#',
      "dataset": 'profile',
      "content": 'Profile'
    }
  ];

  return links.map((link) => `
    <li>
      <a href='${link.href}' data-set='${link.dataset}'>${link.content}</a>
    </li>
    `
  ).join('')
}

function renderSiteHeader(container) {
  	container.innerHTML += ` 
    <header class='page-header'>
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
              ${renderNavLinks()}
            </ul>
          </nav>
        </mast-head>
      </inner-column>
    </header>
  `
}

export {
	renderNavLinks,
	renderSiteHeader
}