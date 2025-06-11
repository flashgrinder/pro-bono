function expertsItemsAnimation(container = document) {

    let expertsItems = Array.from(document.querySelectorAll('.js-expert-item'));

    if(expertsItems) {

        expertsItems.forEach((el, i) => {
            el.addEventListener("click", function () {

                // const currentlySelectedElem = document.querySelector(".js-expert-item.is-active");
                // if (currentlySelectedElem) {
                //     currentlySelectedElem.classList.remove("is-active");
                // }

                el.classList.toggle("is-active");
                event.stopPropagation();
            });
        })

        const clickOutside = e => {
            const currentlySelectedElem = document.querySelector(".js-expert-item.is-active");
            if (currentlySelectedElem) {
                currentlySelectedElem.classList.remove("is-active");
            }
        }

        window.addEventListener("click", clickOutside, false);

    }
}

export default expertsItemsAnimation;