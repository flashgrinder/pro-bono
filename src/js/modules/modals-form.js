import HystModal from 'hystmodal';

function initModal() {

    let wpcf7Elem = document.querySelectorAll( '.wpcf7-form' );

    wpcf7Elem.forEach(function(elem) {

        elem.addEventListener( 'wpcf7mailsent', function( e ) {

            modalsForms.open('.js-modal-success');

        }, false );

    });

    // const hideHeader = document.querySelector('.js-header');

    let modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
        // beforeOpen: function(modal){
        //     hideHeader.style.transform = 'translate(0, -100%)';
        // },
        // afterClose: function(modal){
        //     hideHeader.style.transform = 'translate(0, 0)';
        // }
    });
        
}
  
export default initModal;