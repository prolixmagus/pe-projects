var body = document.querySelector('body');
var form = document.querySelector('#counting-characters');
var input = document.querySelector('#string');
var clear = document.querySelector('.clear-button');
var output = document.querySelector('output');
var characterOutput = document.querySelector('character-count');
var toggle = document.querySelector('#toggle');

function toggleCode(e) {
	body.classList.toggle('javascript');
}

toggle.addEventListener('click', toggleCode);

function renderWordCount(text) {
  //split text into words
  var word = text.split(' ').length;
  form.querySelector('#word-count').textContent = 'Word Count: ' + word;
  return word;
}

function renderCharacterCount(character) {
	characterLength = character.length;
	form.querySelector('#character-count').textContent = 'Character length: ' + character.length;
	return characterLength
}

form.addEventListener("input", function(e) {
  renderWordCount(e.target.value);
  renderCharacterCount(e.target.value);
});


form.addEventListener('submit', (e) => {
	if (body.classList.contains('javascript') ) {
		e.preventDefault();

		var characterCount = renderCharacterCount(input.value);
		var wordCount = renderWordCount(input.value);

		output.innerHTML = `<p class='output-voice'><span style='font-weight: 600'>${input.value}</span> has ${wordCount} word(s) and ${characterCount} characters`;
	}

});

clear.addEventListener('click', function (e) {
	output.innerHTML = '';
	form.querySelector('#character-count').textContent = '';
	form.querySelector('#word-count').textContent = '';
});

input.addEventListener('input', function (e) {
	output.innerHTML = '';
});

// notes about the if statement (to make a section appear or disappear) preventing the node from recognizing output HTML
// blog on progressive enhancement (making old code compatible / more flexible with new)
// also about iterating / adding features to versions (codepen)
// ask derek how to toggle between javascript and php