const header = document.querySelector('.home-header h1');
const body = document.querySelector('body');
;const buttonText = document.querySelector('[data-action="cycle"]')
let index = 0;
const phrases = ['Web Developer. </br> Linguist. Human.', 'How are you? <br /> Doing alright? ', 'Me? Ok, I guess. <br /> Well, actually ...', 'My wife tells me <br /> “It’s normal, dear”', 'I don‘t feel normal. <br /> It calls to me ...', '“Can’t you code a little longer?”', '“Refactor me!” <br /> “Compile faster!”', '“I’m just your type: <br /> Always truthy,”', `This love may be <br /> <span class='terminal'>terminal</span>  ...`, 'Pun intended.<br /> End scene. 🎭', 'If you got this far ... <br /> Congratulations!', 'Let‘s build cool stuff together 🤝'];

function cyclePhrases() {
	index += 1;
	if (index === 5) {
		header.style.color = 'var(--color-primary)';
		body.classList.add('scary');
	}
	if (index === 7) {
		buttonText.textContent = 'Still here?'
	}
	if (index === phrases.length - 1) {
		buttonText.textContent = '😎✌️'
	}
	if (index === phrases.length) {
		index = 0
		body.classList.remove('scary');
		header.style.color = 'var(--ink)';
		buttonText.textContent = 'Click me';
	}
	header.innerHTML = phrases[index];
}

// 	if (event.target.matches('[data-action="disappear"]')) {
document.addEventListener('click', (event) => {
	if(event.target.matches('[data-action="cycle"]')) {
		cyclePhrases();
	}
});