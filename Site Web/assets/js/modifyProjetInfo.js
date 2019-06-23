const jsTechnology = document.querySelector('.js-technology');
jsTechnology.addEventListener('click', menuEditTechnology);

const jsDescription = document.querySelector('.js-description');
jsDescription.addEventListener('click', menuEditDescription);

const jsScreenShot = document.querySelector('.js-screenshot');
jsScreenShot.addEventListener('click', menuEditScreenShot);

function menuEditScreenShot() {
	//* création de la fenettre de menu
	createDiv('main', 'js-blur');
	createDiv('.js-blur', 'js-window-menu');

	//* création de la tool-bar dans fenettre de menu
	createDiv('.js-window-menu', 'js-tool-bar');
	createDiv('.js-tool-bar', 'js-tool-nav');
	createDiv('.js-tool-bar', 'js-tool-images');

	createDiv('.js-tool-images', 'js-img-delete');
	createImg('.js-img-delete', 'assets/icon/icons8-effacer-filled-50.png');
	createCancel('main', '.js-blur', '.js-img-delete');

	//* création du main dans fenettre de menu
	createDiv('.js-window-menu', 'js-main-menu');
	createForm('.js-main-menu', '', 'POST', 'multipart/form-data');

	createDiv('.js-main-menu form', 'js-form-input');

	createDiv('.js-form-input', 'js-input');

	createInputMutiple('.js-input', '', 'file', 'screenShot[]', '', '', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function menuEditDescription() {
	//* création de la fenettre de menu
	createDiv('main', 'js-blur');
	createDiv('.js-blur', 'js-window-menu');

	//* création de la tool-bar dans fenettre de menu
	createDiv('.js-window-menu', 'js-tool-bar');
	createDiv('.js-tool-bar', 'js-tool-nav');
	createDiv('.js-tool-bar', 'js-tool-images');

	createDiv('.js-tool-images', 'js-img-delete');
	createImg('.js-img-delete', 'assets/icon/icons8-effacer-filled-50.png');
	createCancel('main', '.js-blur', '.js-img-delete');

	//* création du main dans fenettre de menu
	createDiv('.js-window-menu', 'js-main-menu');
	createForm('.js-main-menu', '', 'POST', 'multipart/form-data');

	createDiv('.js-main-menu form', 'js-form-input');

	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');

	const input = document.querySelectorAll('.js-input');

	createInput('', input[0], 'text', 'nameProjet', 'Nom du projet', '');

	createTextArea('', input[0], '', 'description', 'Entrez votre description ...', '40', '5');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function menuEditTechnology() {
	//* création de la fenettre de menu
	createDiv('main', 'js-blur');
	createDiv('.js-blur', 'js-window-menu');

	//* création de la tool-bar dans fenettre de menu
	createDiv('.js-window-menu', 'js-tool-bar');
	createDiv('.js-tool-bar', 'js-tool-nav');
	createDiv('.js-tool-bar', 'js-tool-images');

	createDiv('.js-tool-images', 'js-img-delete');
	createImg('.js-img-delete', 'assets/icon/icons8-effacer-filled-50.png');
	createCancel('main', '.js-blur', '.js-img-delete');

	//* création du main dans fenettre de menu
	createDiv('.js-window-menu', 'js-main-menu');
	createForm('.js-main-menu', '', 'POST', 'multipart/form-data');

	createDiv('.js-main-menu form', 'js-form-input');

	createDiv('.js-form-input', 'js-input');

	createInputMutiple('.js-input', '', 'file', 'technologyImg[]', '', '', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

//* fonction créer la balise input
function createInputMutiple(parentElement, parentElementAll, type, name, placeholder, value, multiple) {
	var element = '';

	if (parentElement == '' && parentElementAll != '') {
		element = parentElementAll;
	} else {
		element = document.querySelector(parentElement);
	}

	var newInput = document.createElement('input');

	newInput.setAttribute('type', type);
	newInput.setAttribute('name', name);
	newInput.setAttribute('placeholder', placeholder);
	newInput.setAttribute('value', value);

	newInput.setAttribute('multiple', multiple);

	element.appendChild(newInput);
}
