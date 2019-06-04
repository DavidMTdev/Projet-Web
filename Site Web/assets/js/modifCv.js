const infoBase = document.querySelector('.infosbase');
const contact = document.querySelector('.contact');
const competences = document.querySelector('.compétences');

infoBase.addEventListener('click', () => {
	addItemModfi(infoBase);
	addItemDel(infoBase);
});
infoBase.addEventListener('mouseleave', () => {
	removeItem(infoBase);
});

contact.addEventListener('mouseenter', () => {
	addItemModfi(contact);
	addItemDel(contact);
});
contact.addEventListener('mouseleave', () => {
	removeItem(contact);
});

competences.addEventListener('mouseenter', () => {
	addItemModfi(competences);
	addItemDel(competences);
});
competences.addEventListener('mouseleave', () => {
	removeItem(competences);
});

function addItemModfi(params) {
	//Create ItemModif
	var newItemModif = document.createElement('div');
	var newItemModifImg = document.createElement('img');

	newItemModif.classList.add('itemModif');
	params.appendChild(newItemModif);

	var itemModif = document.querySelector('.itemModif');

	itemModif.appendChild(newItemModifImg);

	var itemModifImg = document.querySelector('.itemModif img');
	itemModifImg.src = 'assets/icon/icons8-editer-le-fichier-48-black.png';
}

function addItemDel(params) {
	//Create ItemDel
	var newItemDel = document.createElement('div');
	var newItemDelImg = document.createElement('img');

	newItemDel.classList.add('itemDel');
	params.appendChild(newItemDel);

	var itemDel = document.querySelector('.itemDel');

	itemDel.appendChild(newItemDelImg);

	var itemDelImg = document.querySelector('.itemDel img');
	itemDelImg.src = 'assets/icon/icons8-effacer-48.png';

	params.style.cssText = 'margin-top: 50px';
}

function removeItem(params) {
	var itemModif = document.querySelector('.itemModif');
	var itemDel = document.querySelector('.itemDel');
	params.removeChild(itemModif);
	params.removeChild(itemDel);
	params.style.cssText = 'margin-top: 0px';
}
