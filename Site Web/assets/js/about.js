window.addEventListener('load', () => {
	changePosition('.presentation-pro', '.experience-pro');

	changePosition('.school-career', '.technical-skill');
	changePosition('.experience-pro', '.language-skill');
	changePosition('.technical-skill', '.leisure');
	changePosition('.language-skill', '.contact');
	// changePosition('.contact', '.download');

	var element1 = document.querySelector('.contact');
	var element2 = document.querySelector('.full-info');

	element2.style.height = element1.offsetHeight + element1.offsetTop + 'px';
});

function changePosition(element1, element2) {
	var elementfixed = document.querySelector(element1);
	var elementChange = document.querySelector(element2);

	elementChange.style.top = elementfixed.offsetHeight + elementfixed.offsetTop - 0.5 + 'px';
}
