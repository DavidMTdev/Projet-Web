const jsButton = document.querySelector('main button'); //! modifier pour mettre l'élément parent
jsButton.addEventListener('click', showWindowMenu);

function showWindowMenu() {
	//* création de la fenettre de menu
	createDiv('main', 'js-blur');
	createDiv('.js-blur', 'js-window-menu');

	//* création de la tool-bar dans fenettre de menu
	createDiv('.js-window-menu', 'js-tool-bar');
	createDiv('.js-tool-bar', 'js-tool-nav');
	createDiv('.js-tool-bar', 'js-tool-images');

	createDiv('.js-tool-images', 'js-img-delete');
	createImg('.js-img-delete', 'assets/icon/icons8_Delete_1.ico');
	createCancel('main', '.js-blur', '.js-img-delete');

	// createDiv('.js-tool-images', 'js-img-other');
	// createImg('.js-img-other', 'assets/icon/icons8_Expand_Arrow.ico');

	//* création du main dans fenettre de menu
	createDiv('.js-window-menu', 'js-main-menu');
	createForm('.js-main-menu', '', 'POST', 'multipart/form-data');

	createDiv('.js-main-menu form', 'js-form-input');

	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');

	const input = document.querySelectorAll('.js-input');

	createInput('', input[0], 'text', 'name', 'placeholder', '');
	createInput('', input[1], 'text', 'name', 'placeholder', '');
	createInput('', input[2], 'file', 'name', 'placeholder', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function createButton(parentElement, type, name, value) {
	const element = document.querySelector(parentElement);

	var newButton = document.createElement('button');

	newButton.setAttribute('type', type);
	newButton.setAttribute('name', name);
	newButton.innerText = value;

	element.appendChild(newButton);
}

//* fonction créer la balise input
function createInput(parentElement, parentElementAll, type, name, placeholder, value) {
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

	element.appendChild(newInput);
}

//* fonction créer la balise form
function createForm(parentElement, action, method, enctype) {
	const element = document.querySelector(parentElement);
	var newForm = document.createElement('form');

	newForm.setAttribute('action', action);
	newForm.setAttribute('method', method);
	newForm.setAttribute('enctype', enctype);

	element.appendChild(newForm);
}

//* fonction créer la balise div avec class
function createDiv(parentElement, nameClass) {
	const element = document.querySelector(parentElement);

	var newDiv = document.createElement('div');
	newDiv.setAttribute('class', nameClass);

	element.appendChild(newDiv);
}

//* fonction créer la balise img
function createImg(parentElement, nameSrc) {
	const element = document.querySelector(parentElement);
	var newImg = document.createElement('img');

	newImg.setAttribute('src', nameSrc);

	element.appendChild(newImg);
}

//* fonction créer le bouton pour suprimer
function createCancel(parentElement, removeElement, selectElement) {
	var element = document.querySelector(selectElement);
	element.setAttribute('onclick', "cancel('" + parentElement + "','" + removeElement + "')");
}

//* fonction suppression de l'éllément enfant
function cancel(parentElement, childElement) {
	const element = document.querySelector(parentElement);
	const removeElement = document.querySelector(childElement);

	element.removeChild(removeElement);
}
