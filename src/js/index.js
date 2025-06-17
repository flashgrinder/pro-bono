import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import mainScreenSliderInit from "./modules/main-screen-slider";
import newsSliderInit from "./modules/news-slider";
import expertsItemsAnimation from "./modules/animation-experts-items";
import pageHeadSliderInit from "./modules/page-head-slider";
import initAcc from "./modules/accordion";
import initModal from "./modules/modals-form";
import headerHideInit from "./modules/hideMenu";
import stepsAnimationsInit from "./modules/steps-animation";

document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    headerHideInit();
    mainScreenSliderInit();
    newsSliderInit();
    expertsItemsAnimation();
    pageHeadSliderInit();
    stepsAnimationsInit();
    initAcc(`.js-accordion-1`, true);
    initAcc(`.js-accordion-2`, true);
    // let accordions = document.querySelectorAll('.js-accordion');
    // if (accordions) {
    //     for (let i = 1; i < accordions.length; i++) {
    //         initAcc(`.js-accordion${i}`, true);
    //     }
    // }
    initModal();
    Fancybox.bind('[data-fancybox]');

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
