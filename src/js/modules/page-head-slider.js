import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
import { EventInterface } from '@splidejs/splide';
function MyTransition( Splide, Components ) {
    const { bind } = EventInterface( Splide );
    const { Move } = Components;
    const { list } = Components.Elements;

    let endCallback;

    function mount() {
        bind( list, 'transitionend', e => {
            if ( e.target === list && endCallback ) {
                // Removes the transition property
                cancel();

                // Calls the `done` callback
                endCallback();
            }
        } );
    }

    function start( index, done ) {
        // Converts the index to the position
        const destination = Move.toPosition( index, true );

        // Applies the CSS transition
        list.style.transition = 'transform 1000ms cubic-bezier(0.42, 0, 0.58, 1)';

        // Moves the carousel to the destination.
        Move.translate( destination );

        // Keeps the callback to invoke later.
        endCallback = done;
    }

    function cancel() {
        list.style.transition = '';
    }

    return {
        mount,
        start,
        cancel,
    };
}

function pageHeadSliderInit () {

    const pageHeadSlider = document.querySelector('.js-page-head-slider');
    if (pageHeadSlider) {
        const pageHeadSlider = new Splide( '.js-page-head-slider', {
            type   : 'slide',
            height: 800,
            perPage: 1,
            autoWidth: true,
            perMove: 1,
            focus: 0,
            trimSpace: false,
            autoplay: false,
            arrows: true,
            gap: 32,
            classes: {
                arrows: 'splide__arrows slider-nav__splide-arrows',
                arrow : 'splide__arrow slider-nav__splide-arrow',
                prev  : 'splide__arrow--prev slider-nav__splide-arrow--prev',
                next  : 'splide__arrow--next slider-nav__splide-arrow--next',
                pagination: 'splide__pagination slider-pagination-dotted',
                page      : 'splide__pagination__page slider-pagination-dotted__page',
            },
            breakpoints: {
                1024: {
                    gap: 16,
                    height: 745,
                },
                768: {
                    gap: 16,
                    height: 460,
                },
            }
        } );

        pageHeadSlider.on( 'mounted', function () {
            let items = pageHeadSlider.length;
            let perPage = pageHeadSlider.options.perPage;
            if ( items <= perPage ) {
                pageHeadSlider.options = {
                    drag: false,
                    pagination: false,
                    arrows: false, // If you're not using the CSS method above you can use this to hide arrows
                };
            }
        });


        pageHeadSlider.mount({}, MyTransition);
    }

}

export default pageHeadSliderInit;