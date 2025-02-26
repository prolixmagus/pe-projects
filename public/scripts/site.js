var hamburgerMenu = document.querySelector(".hamburger");
var userMenu = document.querySelector(".site-header nav .user-menu");
var body = document.querySelector("body");
var close = document.querySelector(".site-header nav button");
var main = document.querySelector("main");
var windowCover = document.createElement("div");

const siteLogo = document.querySelector(".site-logo");

//event listeners

hamburgerMenu.addEventListener("click", (event) => {
    userMenu.classList.add("small-menu-open");
    body.classList.add("menu-open");
});

close.addEventListener("click", (event) => {
    userMenu.classList.remove("small-menu-open");
    body.classList.remove("menu-open");
});

window.addEventListener("resize", (event) => {
    userMenu.classList.remove("small-menu-open");
    body.classList.remove("menu-open");
});

function randomFishColor() {
    const colorArray = ["#E9994B", "#BE7DB4", "#60D3AC"];
    const colorIndex = Math.floor(Math.random() * colorArray.length);
    return colorArray[colorIndex];
}

function addFishColor() {
    // const elements = [siteFirstName, siteSecondName, fishBody];
    const elements = [".firstname", ".lastname", ".fish-body"];
    elements.forEach((element) => {
        document.querySelector(".site-logo " + element).style.fill =
            randomFishColor();
    });
}

siteLogo.addEventListener("mouseenter", addFishColor);

/* --randomized highlight closure--

	(function() {
		//teal - #5DD5B7


		let colors = ['#5DD5B7', '#E8994A', '#BE7DB5'];

		function rotateHighlightColor(array) {   
			const color = array.shift();
			//selects root element
			document.documentElement.style.setProperty("--highlight-color", color);
			array.push(color);
		}


		window.addEventListener('mousedown', () => {
			rotateHighlightColor(colors)
		})
	})();
*/
