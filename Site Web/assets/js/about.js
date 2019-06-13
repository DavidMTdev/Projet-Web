window.addEventListener('load', () => {
	changePosition('.presentation-pro', '.experience-pro');
	changePosition('.school-career', '.language-skill');
	changePosition('.experience-pro', '.technical-skill');
	changePosition('.technical-skill', '.download');
	changePosition('.language-skill', '.leisure');

	var element1 = document.querySelector('.download');
	var element2 = document.querySelector('.full-info');

	element2.style.height = element1.offsetHeight + element1.offsetTop + 'px';
});

function changePosition(element1, element2) {
	var elementfixed = document.querySelector(element1);
	var elementChange = document.querySelector(element2);

	elementChange.style.top = elementfixed.offsetHeight + elementfixed.offsetTop - 0.5 + 'px';
}
