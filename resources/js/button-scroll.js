import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

const buttonScroll = document.getElementById('button-scroll');

const firstContent = document.getElementById('first-content');
// const secondContent = document.getElementById('second-content');

buttonScroll.addEventListener('click', () => {
    scrollDown();
})


const scrollDown = () => {

    const targetSection = window.innerWidth >= 768 ? firstContent : firstContent;
    gsap.to(window, {
        scrollTo: {y: targetSection.offsetTop},
        duration: 1 
    });
}
