let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.add('bx-menu');
	navbar.classList.toggle('open');
}