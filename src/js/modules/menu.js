function menuInit() {
    const menu = document.querySelector('.header__menu-list');

    if (!menu) {
        return;
    }

    menu.addEventListener('click', (event) => {
        const link = event.target.closest('.menu-item-has-children > .menu__link');

        if (!link || window.innerWidth > 1024) {
            return;
        }

        event.preventDefault();

        const item = link.parentElement;

        menu.querySelectorAll('.menu-item-has-children.is-open').forEach((menuItem) => {
            if (menuItem !== item) {
                menuItem.classList.remove('is-open');
            }
        });

        item.classList.toggle('is-open');
    });
}

export default menuInit;
