var body = document.querySelector('body');
var form = document.querySelector('#hello-world');
var input = document.querySelector('#name');
var clear = document.querySelector('.clear-button');
var output = document.querySelector('output');
var toggle = document.querySelector('#toggle');

function toggleCode(e) {
	body.classList.toggle('javascript');
}

toggle.addEventListener('click', toggleCode);

form.addEventListener('submit', (e) => {
	if (body.classList.contains('javascript') ) {
		e.preventDefault();

		if (input.value) {
			output.innerHTML = `<p class="output-voice">Hello, ${input.value}, nice to meet you!</p>`;
		} else {
			output.innerHTML = `<p class="output-voice">Please enter a name</p>`;
		}
	}
});

clear.addEventListener('click', function (e) {
	output.innerHTML = '';
});

input.addEventListener('input', function (e) {
	output.innerHTML = '';
});


// ask derek how to toggle between javascript and php