import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

const buttonScroll = document.getElementById('button-scroll');

const switchMenu = document.getElementById('switch-menu');
const languageMenu = document.getElementById('language-menu');

const burguerMenu = document.getElementById('burguer-menu');
const menuMobile = document.getElementById('menu-mobile');
const closeMobile = document.getElementById('close-mobile');

const firstContent = document.getElementById('first-content');
const secondContent = document.getElementById('second-content');

let showMenu = false;

document.addEventListener('click', event => {
    if (!event.target.closest('switch-menu') && showMenu) {
        showMenu = !showMenu;
        closeMenu();
    }
});

burguerMenu.addEventListener('click', (event) => {
    event.stopPropagation();
    openMenuMobile();
});

closeMobile.addEventListener('click', (event) => {
    event.stopPropagation();
    closeMenuMobile();
});

switchMenu.addEventListener('click', (event) => {
    event.stopPropagation();
    toogleMenu();
});

buttonScroll.addEventListener('click', () => {
    scrollDown();
})

const toogleMenu = () => {
    showMenu = !showMenu;
    if ( !showMenu )
        return closeMenu();

    return openMenu();
};

const openMenu = () => {
    languageMenu.classList.remove('hidden')
}

const closeMenu = () => {
    languageMenu.classList.add('hidden');
}

const openMenuMobile = () => {
    menuMobile.classList.remove('xs:hidden')
}

const closeMenuMobile = () => {
    menuMobile.classList.add('xs:hidden');
}

const scrollDown = () => {

    const content = window.innerWidth >= 768 ? firstContent : secondContent;

    gsap.to(window, {
        scrollTo: {y: content, offsetY: (window.innerHeight / 2)}
    })
}

/* const sliderContainer = document.getElementById('slider-container');
const sliderContainer2 = document.getElementById('slider-container2');

let tween = gsap.to(sliderContainer, {
    xPercent: -100,
    ease: 'none',

    scrollTrigger: {
        trigger: sliderContainer,
        scrub: 1,
        start: 'center center',
        end: "+=" + (sliderContainer.offsetWidth),
        pin: true,
        markers: {
            startColor: 'red',
            endColor: 'blue',
            fontSize: '18px',
            fontWeight: 'bold',
            indent: 20
        },
    }
});

let tween2 = gsap.to(sliderContainer2, {
    xPercent: -100,
    ease: 'none',

    scrollTrigger: {
        trigger: sliderContainer2,
        scrub: 1,
        start: 'center center',
        end: "+=" + (sliderContainer2.offsetWidth),
        pin: true,
        markers: {
            startColor: 'red',
            endColor: 'blue',
            fontSize: '18px',
            fontWeight: 'bold',
            indent: 20
        },
    }
});

const killTween = () => {
    if ( window.innerWidth > 768 ) {
        tween.kill();
        tween2.kill();
    }
}

const resize = () => {
    killTween();

    tween = gsap.to(sliderContainer, {
        xPercent: -100,
        ease: 'none',

        scrollTrigger: {
            trigger: sliderContainer,
            scrub: 1,
            start: 'center center',
            end: "+=" + (sliderContainer.offsetWidth),
            pin: true,
            markers: {
                startColor: 'red',
                endColor: 'blue',
                fontSize: '18px',
                fontWeight: 'bold',
                indent: 20
            },
        }
    });

    tween2 = gsap.to(sliderContainer2, {
        xPercent: -100,
        ease: 'none',

        scrollTrigger: {
            trigger: sliderContainer2,
            scrub: 1,
            start: 'center center',
            end: "+=" + (sliderContainer2.offsetWidth),
            pin: true,
            markers: {
                startColor: 'red',
                endColor: 'blue',
                fontSize: '18px',
                fontWeight: 'bold',
                indent: 20
            },
        }
    });

}

window.onresize = resize;
killTween();
 */
