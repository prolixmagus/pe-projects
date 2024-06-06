var body = document.querySelector('body');
var form = document.querySelector('#counting-characters');
var input = document.querySelector('#string');
var clear = document.querySelector('.clear-button');
var output = document.querySelector('output');
var characterOutput = document.querySelector('character-count');
var toggle = document.querySelector('#toggle');

function toggleCode(e) {
	body.classList.toggle('javascript');
  form.querySelector('#word-count').textContent = '';
  form.querySelector('#character-count').textContent = '';
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
	} else {
		output.innerHTML = ``;
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

/*vue section*/

const countingCharacters = Vue.createApp({

   data() {
      return {
         userInput: '',
         wordLabel: 'Write a word, any word!',
         totalChars: 0,
         message: '',
         prevInput: '',
         lastInput: ''
      }
   },
   
   methods: {
      handleSubmit(event) {
         event.preventDefault();
         this.validateInput();
      },
      validateInput() {
         if (!this.userInput.trim()) {
            this.wordLabel ='Don\'t be shy, write a word!';
            this.message = '';
         } else if (!isNaN(this.userInput.trim())) {
            this.message ='Please, words only!';
         } else {
            this.lastInput = this.prevInput; //safe from being changed
            this.prevInput = this.userInput;
            this.message = this.renderMessage()
         }
      },
     renderMessage() {
         this.totalChars = this.userInput.length;
         return `${this.userInput}" has ${this.totalChars} characters.`
      },
      renderPreviousMessage() {
         return `Your previous input '${this.lastInput}' had ${this.lastInput.length} characters.`
      },
      clear() {
      	    this.userInput = '';
            this.wordLabel = 'Write a word, any word!';
            this.totalChars = 0;
            this.message = '';
            this.prevInput = '';
            this.lastInput = '';
        }
   },
   
   computed: {

   },
   compilerOptions: {
   // treat all tags with a dash as custom elements
   	isCustomElement: (tag) => tag.includes('-')
   }
});

countingCharacters.mount('.vue-counting');


// notes about the if statement (to make a section appear or disappear) preventing the node from recognizing output HTML
// blog on progressive enhancement (making old code compatible / more flexible with new)
// also about iterating / adding features to versions (codepen)
// ask derek how to toggle between javascript and php