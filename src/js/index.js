import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import mainScreenSliderInit from "./modules/main-screen-slider";
import newsSliderInit from "./modules/news-slider";
import expertsItemsAnimation from "./modules/animation-experts-items";

document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    mainScreenSliderInit();
    newsSliderInit();
    expertsItemsAnimation();
    Fancybox.bind('[data-fancybox]');

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
