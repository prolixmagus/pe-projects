const duoForm = document.querySelector('.duo-lingo-form')

duoForm.addEventListener('click', (e) => {
	if (e.target.matches('[type="checkbox"]')) {
		let listItem = e.target.closest('li')
		listItem.classList.toggle('checked')
	}
})

const scrollContainer = document.querySelector('.scroll');
const marquee = document.querySelector('.marquee');

window.addEventListener('scroll', () => {
  const containerTop = scrollContainer.getBoundingClientRect().top;
  //check if container is in the viewport
  if (containerTop < window.innerHeight) {
    const scrollPos = window.scrollY;
    const viewportWidth = window.innerWidth;
    //offsetTop is in relation to the document - not affected by scrolling
    const textMovePos = (scrollPos - scrollContainer.offsetTop) % (2 * viewportWidth);
    marquee.style.transform = `translateX(${-textMovePos}px)`;
  }
});
