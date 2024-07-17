const header = document.querySelector('.home-header h1');
const body = document.querySelector('body');
const buttonText = document.querySelector('[data-action="cycle"]')
const buttonContainer = document.querySelector('.cycle-button-container');
let index = 0;
const phrases = [
	'Web Developer. </br> Linguist. Human.', 
	'How are you? <br /> Doing alright? ', 
	'Me? Ok, I guess. <br /> Well, actually ...', 
	'My wife tells me <br /> “It’s normal, dear”', 
	'I don‘t feel normal. <br /> There is a voice', 
	'It calls to me <br /> every night ...', 
	'“Can’t you code <br /> a little longer?”', 
	'“Refactor me!” <br /> “Compile faster!”', 
	'“I’m just your type: <br /> Always truthy,”', 
	`This love may be <br /> <span class='terminal'>terminal</span>  ...`, 
	'Pun intended.<br /> End scene. 🎭', 
	'If you got this far ... <br /> Congratulations!', 
	'Let‘s build cool stuff <br /> together 🤝'];

function cyclePhrases() {
	index += 1;

	if (index === 5) {
		header.style.color = 'var(--color-primary)';
		body.classList.add('scary');
		renderEscape();
	}
	if (index === 7) {
		buttonText.textContent = 'Still here?'
	}
	if (index === phrases.length - 1) {
		buttonText.textContent = '😎✌️'
	}
	if (index === phrases.length) {
		resetCycle();
	}

	header.innerHTML = phrases[index];
}

function resetCycle() {
	index = 0;
	header.innerHTML = phrases[index];
	body.classList.remove('scary');
	header.style.color = 'var(--ink)';
	buttonContainer.innerHTML = `
	<button class='cycle' id='cycle' data-action='cycle'>Click me</button>`;
}

function renderEscape() {
	buttonContainer.insertAdjacentHTML('beforeend', `<button class='cycle escape' id='escape' data-action='escape'>Retreat</button>`);
}


document.addEventListener('click', (event) => {
	if(event.target.matches('[data-action="cycle"]')) {
		cyclePhrases();
	}

	if (event.target.matches('[data-action="escape"]')) {
		resetCycle();
	}
});