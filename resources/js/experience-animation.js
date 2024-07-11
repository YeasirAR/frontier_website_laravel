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

    const targetSection = window.innerWidth >= 768 ? firstContent : secondContent;

    gsap.to(window, {
        scrollTo: {y: targetSection.offsetTop}, 
        duration: 1 
    });
}
