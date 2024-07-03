const header = document.querySelector('.home-header h1');
const body = document.querySelector('body');
let index = 0;
const phrases = ['Thanks for visiting', 'It\'s a wonderful day!', 'Help me', 'What am I doing?', 'I can\'t sleep anymore.', 'My wife says its nothing...', 'But I hear them', 'weeping', 'begging', 'demanding', '...'];

function cyclePhrases() {
	index += 1;
	if (index === 4) {
		header.style.color = 'red';
		body.classList.add('scary');
	}
	if (index === phrases.length) {
		index = 0
		body.classList.remove('scary');
		header.style.color = 'black';
	}
	header.innerHTML = phrases[index];
}

// 	if (event.target.matches('[data-action="disappear"]')) {
document.addEventListener('click', (event) => {
	if(event.target.matches('[data-action="cycle"]')) {
		cyclePhrases();
	}
});