import { initialize } from './find-a-guide.js'
function test(description, assertion) {
	if (typeof assertion === 'function') {
		if (assertion()) {
			console.info(description, 'passed!');
		} else {
			console.error(description, 'fail :(');
		}
	} else {
		if (assertion === true) {
			console.info(description, 'passed!');
		} else {
			console.error(description, 'fail :(');
		}
	}
}

function double(number) {
	if (typeof number === 'number') {
		return number + number;
	} else {
		return 'This is not a number';
	}
}

test('double the number', double(2) === 4 ); 

test('letter fails', double('a') === 'This is not a number');

test('login rendered', () => {
	initialize();
	const head = document.querySelector('h1');
	return head.textContent == 'Find-A-Guide';
});


// route to home page
// detect something is present in dom
