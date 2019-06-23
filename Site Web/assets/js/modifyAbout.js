const jsImage = document.querySelector('.js-image');
jsImage.addEventListener('click', uploadImage);

const jsInfoPro = document.querySelector('.js-info-pro');
jsInfoPro.addEventListener('click', menuEditInfoPro);

const jsPresentation = document.querySelector('.js-presentation');
jsPresentation.addEventListener('click', menuEditPresentation);

const jsSchoolCareer = document.querySelector('.js-school-career');
jsSchoolCareer.addEventListener('click', menuEditSchoolCareer);

const jsExperience = document.querySelector('.js-experience');
jsExperience.addEventListener('click', menuEditExperience);

const jsLanguageSkill = document.querySelector('.js-language-skill');
jsLanguageSkill.addEventListener('click', menuEditLanguageSkill);

const jsTechnicalSkill = document.querySelector('.js-technical-skill');
jsTechnicalSkill.addEventListener('click', menuEditTechnicalSkill);

const jsContact = document.querySelector('.js-contact');
jsContact.addEventListener('click', menuEditContact);

const jsLeisure = document.querySelector('.js-leisure');
jsLeisure.addEventListener('click', menuEditLeisure);

function menuEditLeisure() {
	const elementAll = document.querySelectorAll('.leisure p');

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

	createDiv('.js-main-menu', 'js-form-input');

	for (let i = 0; i < elementAll.length; i++) {
		createFormAll('.js-form-input', '', '', 'POST', 'multipart/form-data');

		const form = document.querySelectorAll('.js-form-input form');

		createDivAll('', form[i], 'js-input');

		const input = document.querySelectorAll('.js-input');

		createInput('', input[i], 'text', 'leisure', 'loisir ', '');
		createInput('', input[i], 'hidden', 'idTechnicalSkill', '', idTechnicalSkill[i]);
		createInput('', input[i], 'hidden', 'key', '', keyTechnicalSkill[i]);
		createInput('', input[i], 'submit', '', '', 'Valider');
	}
}

function menuEditContact() {
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
	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');
	createDiv('.js-form-input', 'js-input');

	const input = document.querySelectorAll('.js-input');

	createInput('', input[0], 'text', 'address', 'Adresse', '');
	createInput('', input[1], 'text', 'city', 'Ville', '');
	createInput('', input[2], 'number', 'postal_code', 'Code postal', '');
	createInput('', input[3], 'text', 'country', 'Pays', '');
	createInput('', input[4], 'email', 'mail', 'Mail', '');
	createInput('', input[5], 'number', 'phone', 'Téléphone', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function menuEditTechnicalSkill() {
	const elementAll = document.querySelectorAll('.technical-skill .skillbox');

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

	createDiv('.js-main-menu', 'js-form-input');

	for (let i = 0; i < elementAll.length; i++) {
		createFormAll('.js-form-input', '', '', 'POST', 'multipart/form-data');

		const form = document.querySelectorAll('.js-form-input form');

		createDivAll('', form[i], 'js-input');

		const input = document.querySelectorAll('.js-input');

		createInput('', input[i], 'text', 'technicalSkill', 'Compétence', '');
		createInput('', input[i], 'number', 'levelTechnicalSkill', 'Niveau de compétence', '');
		createInput('', input[i], 'file', 'imageTechnicalSkill', '', '');
		createInput('', input[i], 'hidden', 'idTechnicalSkill', '', idTechnicalSkill[i]);
		createInput('', input[i], 'hidden', 'key', '', keyTechnicalSkill[i]);
		createInput('', input[i], 'submit', '', '', 'Valider');
	}
}

function menuEditLanguageSkill() {
	const elementAll = document.querySelectorAll('.language-skill .skillbox');

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

	createDiv('.js-main-menu', 'js-form-input');

	for (let i = 0; i < elementAll.length; i++) {
		createFormAll('.js-form-input', '', '', 'POST', 'multipart/form-data');

		const form = document.querySelectorAll('.js-form-input form');

		createDivAll('', form[i], 'js-input');

		const input = document.querySelectorAll('.js-input');

		createInput('', input[i], 'text', 'language', 'Langue ', '');
		createInput('', input[i], 'number', 'levelLanguage', 'Niveau de langage', '');
		createInput('', input[i], 'hidden', 'idLanguageSkill', '', idLanguageSkill[i]);
		createInput('', input[i], 'hidden', 'key', '', keyLanguageSkill[i]);
		createInput('', input[i], 'submit', '', '', 'Valider');
	}
}

function menuEditExperience() {
	const elementAll = document.querySelectorAll('.experience-pro ol li');

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

	createDiv('.js-main-menu', 'js-form-input');

	for (let i = 0; i < elementAll.length; i++) {
		createFormAll('.js-form-input', '', '', 'POST', 'multipart/form-data');

		const form = document.querySelectorAll('.js-form-input form');

		createDivAll('', form[i], 'js-input');

		const input = document.querySelectorAll('.js-input');

		createInput('', input[i], 'text', 'companyName', "Nom de l'entreprise", '');
		createInput('', input[i], 'number', 'startDate', "Date d'arrivée dans l'entreprise", '');
		createInput('', input[i], 'number', 'endDate', "Date de départ de l'entreprise", '');
		createInput('', input[i], 'text', 'post', 'Poste', '');
		createInput('', input[i], 'hidden', 'idExperience', '', idExperience[i]);
		createInput('', input[i], 'hidden', 'key', '', keyExperience[i]);
		createInput('', input[i], 'submit', '', '', 'Valider');
	}
}

function menuEditSchoolCareer() {
	const elementAll = document.querySelectorAll('.school-career ol li');

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

	createDiv('.js-main-menu', 'js-form-input');

	for (let i = 0; i < elementAll.length; i++) {
		createFormAll('.js-form-input', '', '', 'POST', 'multipart/form-data');

		const form = document.querySelectorAll('.js-form-input form');

		createDivAll('', form[i], 'js-input');

		const input = document.querySelectorAll('.js-input');

		createInput('', input[i], 'text', 'schoolName', "Nom de l'école", '');
		createInput('', input[i], 'number', 'startDate', 'Date de début de scolarité', '');
		createInput('', input[i], 'number', 'endDate', 'Date de fin de scolarité', '');
		createInput('', input[i], 'text', 'graduate', 'Diplôme', '');
		createInput('', input[i], 'hidden', 'idSchool', '', idSchoolCareer[i]);
		createInput('', input[i], 'hidden', 'key', '', keySchool[i]);
		createInput('', input[i], 'submit', '', '', 'Valider');
	}
}

function menuEditPresentation() {
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

	createTextArea('.js-input', '', '', 'presentation', 'Entrez votre présentation ...', '40', '5');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function menuEditInfoPro() {
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
	createDiv('.js-form-input', 'js-input');

	const input = document.querySelectorAll('.js-input');

	createInput('', input[0], 'text', 'firstname', 'Nom', '');
	createInput('', input[1], 'text', 'lastname', 'Prenom', '');
	createInput('', input[2], 'text', 'year', 'Age', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}

function uploadImage() {
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

	const input = document.querySelectorAll('.js-input');

	createInput('', input[0], 'file', 'image', 'placeholder', '');

	createDiv('.js-main-menu form', 'js-form-submit');

	createButton('.js-form-submit', 'submit', '', 'Valider');
}
