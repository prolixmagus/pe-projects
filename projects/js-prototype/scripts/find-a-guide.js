const body = document.querySelector('body');

function renderLoginPage() {
  body.innerHTML = 
    `
      <h1 class='loud-voice'>Find-A-Guide</h1>
      <section class='login-page'>

        <form class='login'>
         <label for='userEmail'>Email</label>
         <input id='userEmail' type='email' class='email' placeholder='someone@something.com' required>

         <label for='password'>Password</label>
         <input id='password' class='password' type='password' autocomplete='dragon' required>

         <button class='login-btn' type='button'>Login</button>
        </form>

        <p class='message-container'></p>

      </section>
    `

const loginButton = document.querySelector('.login-btn');
const passwordInput = document.querySelector('.password');
const messageContainer = document.querySelector('.message-container');
  
attachLoginEventListener(loginButton, passwordInput, messageContainer);
}

function attachLoginEventListener(button, password, message) {
  button.addEventListener('click', (event) => {
    event.preventDefault();
    
    message.innerHTML = '';
    
    if (password.value === 'dragon') {
      message.innerHTML = `You did it!`
    } else {
      message.innerHTML = `Try again!`;
    }
    
  })
}

renderLoginPage();