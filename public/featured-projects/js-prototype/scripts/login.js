import { attachTemplate } from './find-a-guide.js';
import { state, saveState } from './state.js';
import { renderSiteHeader, attachLinkEventListeners, getTourSearchView } from './site-header.js';
import { renderSiteFooter } from './site-footer.js';

function renderLoginView(container) {
  container.innerHTML += `
      <section class='login-view'>
        <inner-column>

          <h1 class='loud-voice'>Find-A-Guide</h1>

          <form class='login' data-action='login'>
            <field>
              <label for='username'>Username</label>
              <input id='username' class='username' type='text' required>
            </field>

            <field>
              <label for='password'>Password</label>
              <input id='password' class='password' type='password' required>
            </field>

            <button class='login-btn' data-set="login" type='submit'>Login</button>
          </form>

          <div class='login-message'>
            <p>Username: Test (or make your own)</p>
            <p>Password: Test (or make your own)</p>
          </div>

        </inner-column>
      </section>
    `
    
  attachLoginFormEventListener()
}

function validate(password, storedUserPassword, username, storedUserInput) {
  return (password.value === storedUserPassword && username.value === storedUserInput)
}

function setCurrentUser(key, username) {
  localStorage.setItem(key, JSON.stringify(username));
}

function createUserProfile(username, userPassword) {
  const userData = { username: username.value, password: userPassword.value };
  localStorage.setItem(userData.username, JSON.stringify(userData));
  // change current user to just-created profile
  setCurrentUser('currentUser', userData);
}

function getCurrentUserData() {
  const userDataString = localStorage.getItem('currentUser')
  const userData = JSON.parse(userDataString);
  return userData;
}

function getUserData(key) {
  const userDataString = localStorage.getItem(key)
  const userData = JSON.parse(userDataString)
  return userData;
}


function handleLogin() {
  const username = document.querySelector('.username')
  const password = document.querySelector('.password');
  const message = document.querySelector('.login-message');

  const userData = getUserData(username.value)

  if (userData) {
    if ( validate(password, userData.password, username, userData.username) ) {
      const main = document.querySelector('main');

      state.login = true;
      state.currentView = 'search';
      saveState();

      setCurrentUser('currentUser', userData);
      renderSiteHeader(main);
      attachTemplate(getTourSearchView);
      renderSiteFooter(main);
      attachLinkEventListeners();
    } else {
      message.textContent = 'Incorrect password';
    }
  } else {
    if (!username.value || !password.value) {
      message.textContent = 'Please input a username and password';
    } else {
      createUserProfile(username, password)
      message.innerHTML = '<p>Profile created! Log in.</p>'
    }
  }
}

function attachLoginFormEventListener() {
  const loginForm = document.querySelector('.login')

  loginForm.addEventListener('click', (event) => {
    if (event.target.matches('[data-set="login"]') ) {
      event.preventDefault();
      handleLogin();
    }
  })
}

export {
	renderLoginView,
  attachLoginFormEventListener,
  handleLogin,
  validate,
  getCurrentUserData,
  getUserData
}