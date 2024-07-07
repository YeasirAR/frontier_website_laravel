import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const sliderContainer = document.getElementById('slider-container');

gsap.to(sliderContainer, {
    xPercent: -100,
    ease: 'none',

    scrollTrigger: {
        trigger: sliderContainer,
        scrub: 1,
        start: 'center center',
        end: "+=" + (sliderContainer.offsetWidth),
        pin: true,
        /* markers: {
            startColor: 'red',
            endColor: 'blue',
            fontSize: '18px',
            fontWeight: 'bold',
            indent: 20
        }, */
    }
})
