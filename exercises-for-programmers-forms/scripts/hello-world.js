var form = document.querySelector('#hello-world');
var input = document.querySelector('#name');
var clear = document.querySelector('.clear-button');
var output = document.querySelector('output');


form.addEventListener('submit', (e) => {

	e.preventDefault();

	if (input) {
		output.innerHTML = `<p class='output-voice'>Hello, ${input.value}, nice to meet you!</p>`;
	} else {
		output.innerHTML = `<p class='output-voice'>Please enter a name</p>`;
	}

});

clear.addEventListener('click', function (e) {
	output.innerHTML = '';
});

input.addEventListener('input', function (e) {
	output.innerHTML = '';
});

// notes about the if statement (to make a section appear or disappear) preventing the node from recognizing output HTML
// blog on progressive enhancement (making old code compatible / more flexible with new)
// also about iterating / adding features to versions (codepen)