const header = document.querySelector('.home-header h1');
const body = document.querySelector('body');
const buttonText = document.querySelector('[data-action="cycle"]')
let index = 0;
const phrases = ['Thanks for visiting', 'It’s a wonderful day!', 'I can’t control it', 'My wife says it’s nothing', 'But the work calls to me...', '“Can’t you code a little longer?”', '“Refactor me!”', '“I’m just your type!”', 'It is harder and harder to resist...', 'End scene.', 'If you got this far', 'Congratulations!', 'I’d love to work with you!', 'Let’s connect.'];

function cyclePhrases() {
	index += 1;
	if (index === 5) {
		header.style.color = 'var(--color-primary)';
		body.classList.add('scary');
	}
	if (index === 7) {
		buttonText.textContent = 'Still going?'
	}
	if (index === phrases.length - 1) {
		buttonText.textContent = 'That was fun'
	}
	if (index === phrases.length) {
		index = 0
		body.classList.remove('scary');
		header.style.color = 'var(--ink)';
		buttonText.textContent = 'Click me'
	}
	header.innerHTML = phrases[index];
}

// 	if (event.target.matches('[data-action="disappear"]')) {
document.addEventListener('click', (event) => {
	if(event.target.matches('[data-action="cycle"]')) {
		cyclePhrases();
	}
});