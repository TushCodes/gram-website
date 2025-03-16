import MobileFunctionalities from './responsive-functions.js';


class MainApp {
    constructor() {
        new MobileFunctionalities();
        this.setupBannerSlider();
    }

    /**
     * Sets up the banner slider functionality to automatically change slides
     * every 15 seconds.
     */
    setupBannerSlider() {
        (function() {
            let currentSlide = 0;
            const slides = document.getElementsByName("slides");
            const totalSlides = slides.length;

            setInterval(() => {
                slides[currentSlide].checked = false;
                currentSlide = (currentSlide + 1) % totalSlides;
                slides[currentSlide].checked = true;
            }, 15000);
        })();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new MainApp();
});
