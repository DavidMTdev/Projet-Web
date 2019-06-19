const login = document.querySelector('.nav-header .nav-login');

login.addEventListener('click', loginVisible, false);

function loginVisible() {
	document.querySelector('.nav-header .login').classList.toggle('visible');
}

function toggleVisibleClassMenuBurger(params) {
	document.querySelector(params).classList.toggle('visible');
}
