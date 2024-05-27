import { attachTemplate } from './find-a-guide.js';
import { state } from './state.js';
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

            <button class='login-btn' data-set="login" type='submit'>Submit</button>
          </form>

          <p class='login-message'></p>

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
  const userData = JSON.parse(userDataString)
  console.log(userData);
  return userData;
}

function getUserData(key) {
  return localStorage.getItem(key)
}


function handleLogin() {
  const username = document.querySelector('.username')
  const password = document.querySelector('.password');
  const message = document.querySelector('.login-message');

  const userData = getUserData(username.value)

  if (userData) {
    const storedUser = JSON.parse(userData);
    if ( validate(password, storedUser.password, username, storedUser.username) ) {
      const main = document.querySelector('main');
      state.login = true;

      setCurrentUser('currentUser', storedUser);
      renderSiteHeader(main);
      attachLinkEventListeners();
      attachTemplate(getTourSearchView);
      renderSiteFooter(main);
    } else {
      message.textContent = 'Incorrect password';
    }
  } else {
    if (!username.value || !password.value) {
      message.textContent = 'Please input a username and password';
    } else {
      createUserProfile(username, password)
      message.textContent = 'Profile created! Click submit to log in.'
    }
  }
}

function attachLoginFormEventListener() {
  const loginForm = document.querySelector('.login')

  loginForm.addEventListener('click', (event) => {
    event.preventDefault();
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
  getCurrentUserData
}