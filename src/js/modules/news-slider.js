import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function newsSliderInit() {

    const newsSlider = document.querySelector('.js-news-slider');
    if (newsSlider) {
        const newsSlider = new Splide( '.js-news-slider', {
            type   : 'slide',
            perPage: 4,
            // autoWidth: true,
            perMove: 1,
            focus: 0,
            trimSpace: false,
            autoplay: false,
            arrows: false,
            pagination: false,
            gap: 20,
            destroy: true,
            breakpoints: {
                1024: {
                    destroy: false,
                    perPage: 3.2,
                    gap: 10,
                },
                768: {
                    perPage: 2,
                },
                576: {
                    perPage: 1,
                },
            }
        } );

        newsSlider.mount();

    }
}

export default newsSliderInit;