import './bootstrap';
import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollToPlugin);


const switchMenu = document.getElementById('switch-menu');
const languageMenu = document.getElementById('language-menu');

const burguerMenu = document.getElementById('burguer-menu');
const menuMobile = document.getElementById('menu-mobile');
const closeMobile = document.getElementById('close-mobile');

const firstContentDesktop = document.getElementById('first-content-desktop');
const firstContentMobile = document.getElementById('first-content-mobile');

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


