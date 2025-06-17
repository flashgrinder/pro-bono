function headerHideInit () {

    const header = document.querySelector('.js-header');

    const throttle = (func, time = 100) => {
        let lastTime = 0;
        return () => {
            const now = new Date();
            if (now - lastTime >= time) {
                func();
                time = now;
            }
        };
    };

    const validateButtonsFixed = () => {
        const windowY = window.scrollY;
        const windowH = window.innerHeight;

        if( windowY > windowH - 1500) {

            if (windowY <= (document.querySelector(".footer").offsetTop - window.innerHeight)) {
                header.classList.add('is-visible');
            } else {
                header.classList.remove('is-visible');
            }

        } else {
            header.classList.remove('is-visible');
        }
    };

    window.addEventListener("scroll", throttle(validateButtonsFixed, 100));

}

export default headerHideInit;