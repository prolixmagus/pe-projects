function renderLoginPage(container) {
  container.innerHTML += `
      <section class='login-page'>
        <inner-column>

          <h1 class='loud-voice'>Find-A-Guide</h1>

          <form class='login'>
            <field>
              <label for='userEmail'>Email</label>
              <input id='userEmail' type='email' class='email' value='charlesmings@jazz.org' required>
            </field>

            <field>
              <label for='password'>Password</label>
              <input id='password' class='password' type='password' value='moanin' placeholder='moanin' required>
            </field>

            <button class='login-btn' type='button'>Login</button>
          </form>

          <p class='message-container'></p>

        </inner-column>
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
    
    if (password.value === 'moanin') {
      message.innerHTML = `You did it!`
    } else {
      message.innerHTML = `Try again!`;
    }
    
  })
}

export {
	renderLoginPage,
}