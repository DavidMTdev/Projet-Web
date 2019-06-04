const menuDelete = document.querySelector('.bar-menu .menuDelete');
const menuBurger = document.querySelector('.bar-menu .menuBurger');
const navBarV = document.querySelector('.navbar-v');

menuDelete.addEventListener('click', menu);
menuBurger.addEventListener('click', menu);

function actionDelete() {
	navBarV.style.width = '60px';
	toggleVisibleClassMenuBurger('.bar-menu .menuBurger');
	toggleVisibleClassMenuBurger('.bar-menu .menuDelete');
}

function actionMenu() {
	navBarV.style.width = '250px';
	toggleVisibleClassMenuBurger('.bar-menu .menuBurger');
	toggleVisibleClassMenuBurger('.bar-menu .menuDelete');
}

function toggleVisibleClassMenuBurger(params) {
	document.querySelector(params).classList.toggle('visible');
}

var result = 1;

function menu() {
	if (result == 0) {
		actionMenu();
		result = 1;
	} else {
		actionDelete();
		result = 0;
	}
}
