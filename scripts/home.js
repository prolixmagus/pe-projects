// //get canvas context

// var canvas = document.querySelector('canvas')
// var ctx = canvas.getContext("2d");
// var whiteboard = document.querySelector('whiteboard');

// // set states
// var drawing = false;
// var rainbow = false;
// var lastColor = ''

// //elements

// var redBtn = document.getElementById('red-btn')
// var blueBtn = document.getElementById('blue-btn')
// var yellowBtn = document.getElementById('yellow-btn')
// var rainbowBtn = document.getElementById('rainbow-btn')
// var clearBtn = document.getElementById('clear-btn')
// var colorPicker = document.getElementById('color-picker')

// var lastX;
// var lastY;

// function stopDrawing(event) {
// 	drawing = false;
// }

// function draw(event) {
// 	event.preventDefault();
// 	if(drawing) {
// 	var rect = canvas.getBoundingClientRect();
// 	var currentX = (event.clientX - rect.left) * (canvas.width / rect.width);
// 	var currentY = (event.clientY - rect.top) * (canvas.height / rect.height);
// 	ctx.lineWidth = 15;
// 	if (rainbow) {
// 		ctx.strokeStyle = randomHexColor();
// 	} else {
//       ctx.strokeStyle = colorPicker.value;
//    }
// 	ctx.beginPath();
// 	ctx.moveTo(lastX, lastY);
// 	ctx.lineTo(currentX, currentY);
// 	ctx.stroke(); 
// 	ctx.closePath();
// 	lastX = currentX;
// 	lastY = currentY;
// 	}

// }

// //repetitive ... can initialize?
// function startDrawing(event) {
// 	drawing = true;
// 	//getting position relative to canvas box
// 	var rect = canvas.getBoundingClientRect();
// 	lastX = (event.clientX - rect.left) * (canvas.width / rect.width);
// 	lastY = (event.clientY - rect.top) * (canvas.height / rect.height);
// 	ctx.beginPath();
// }

// function randomHexColor() {
// 	var hexString = '#'
// 	var hexDigits = '123456789abcdef';

// 	for(let i = 0; i < 6; i++) {
// 		hexString += (hexDigits[Math.floor(Math.random() * hexDigits.length)])
// 	}

// 	return hexString;
// }

// function clearCanvas() {
// 	ctx.clearRect(0, 0, canvas.width, canvas.height)
// }
// //to account for touch and mouse events
// canvas.addEventListener("mousedown", startDrawing);
// canvas.addEventListener("mousemove", draw);
// canvas.addEventListener("mouseup", stopDrawing);
// canvas.addEventListener("touchstart", startDrawing);
// canvas.addEventListener("touchmove", draw);
// canvas.addEventListener("touchend", stopDrawing);

// //Event listeners for adding different stroke styles to each button
// redBtn.addEventListener('click', function() {
// 	ctx.strokeStyle = "#FF0000";
// 	colorPicker.value = "#FF0000";
// 	rainbow = false; // this is what I needed to allow you to swap between colors on click!
// 	rainbowBtn.innerHTML = ``
// })

// yellowBtn.addEventListener('click', function() {
// 	ctx.strokeStyle = "#FFFF00";
// 	colorPicker.value = "#FFFF00";
// 	rainbow = false;
// 	rainbowBtn.innerHTML = ``
// })

// blueBtn.addEventListener('click', function() {
// 	ctx.strokeStyle = "#0000FF";
// 	colorPicker.value = "#0000FF";
// 	rainbow = false;
// 	rainbowBtn.innerHTML = ``
// })

// // changing stroke to 
// colorPicker.addEventListener('change', function(event) {
// 	ctx.strokeStyle = event.target.value;
// 	lastColor = event.target.value;
// })

// function toggleRainbowMode(event) {
// 	rainbow = !rainbow

// }
// rainbowBtn.addEventListener('click', function() {
// 	if (rainbow = true) {
// 		rainbowBtn.innerHTML = `<p>On</p>`
// 		colorPicker.value = `#FFFFFF`
// 	}
// })

// //clears the canvas
// clearBtn.addEventListener('click', clearCanvas);
