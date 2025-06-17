function mobileNav() {
	// Mobile nav button
	const headerMobile = document.querySelector('.js-header');
	const burgerBtn = document.querySelector('.js-mobile-nav-burger .burger');

	burgerBtn.onclick = function () {
		headerMobile.classList.toggle('is-active');
		burgerBtn.classList.toggle('is-open');
		// document.body.classList.toggle('no-scroll');
	};
}

export default mobileNav;