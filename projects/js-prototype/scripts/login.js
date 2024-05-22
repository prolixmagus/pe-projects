import { attachTemplate } from './find-a-guide.js';
import { state } from './state.js';
import { renderSiteHeader, attachLinkEventListeners, getTourSearchPage } from './site-header.js';

function renderLoginPage(container) {
  container.innerHTML += `
      <section class='login-page'>
        <inner-column>

          <h1 class='loud-voice'>Find-A-Guide</h1>

          <form class='login' data-action='login'>
            <field>
              <label for='userEmail'>Email</label>
              <input id='userEmail' type='email' class='email' value='charlesmings@jazz.org' required>
            </field>

            <field>
              <label for='password'>Password</label>
              <input id='password' class='password' type='password' placeholder='moanin' required>
            </field>

            <button class='login-btn' data-set="login" type='submit'>Submit</button>
          </form>

          <p class='login-message'></p>

        </inner-column>
      </section>
    `
    
  attachLoginFormEventListener()
}

function validate(password) {
  console.log(password);
  return (password.value === 'moanin')
}

function handleLogin() {
  const password = document.querySelector('.password');
  const message = document.querySelector('.login-message');

  if (validate(password)) {
    const main = document.querySelector('main');
    state.login = true;
    renderSiteHeader(main);
    attachLinkEventListeners();
    attachTemplate(getTourSearchPage);
  } else {
    message.textContent = 'Incorrect password';
  }
}

function attachLoginFormEventListener() {
  window.addEventListener('click', (event) => {
    if (event.target.matches('[data-set="login"]') ) {
      event.preventDefault();
      handleLogin();
    }
  })
}


export {
	renderLoginPage,
  attachLoginFormEventListener,
  handleLogin,
  validate
}