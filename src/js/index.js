import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import mainScreenSliderInit from "./modules/main-screen-slider";
import newsSliderInit from "./modules/news-slider";

document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    mainScreenSliderInit();
    newsSliderInit();
    Fancybox.bind('[data-fancybox]');

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
