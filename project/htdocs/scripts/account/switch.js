const dark = document.getElementById('dark');
const light = document.getElementById('light');
const wrapDark = document.getElementById('wrap-dark');
const wrapLight = document.getElementById('wrap-light');

const marqueDark = document.getElementById('marque-dark');
const marqueLight = document.getElementById('marque-light');

function isMobile() {
    return window.innerWidth <= 809;
}

/*********************************
 * switchToSignUp
 ********************************/
function switchToSignUp() {
    if (isMobile()) {
        dark.style.opacity = 0;
        dark.style.pointerEvents = 'none';
        light.style.opacity = 1;
        light.style.pointerEvents = 'all';
        light.style.zIndex = 3;
    } else {
        wrapDark.style.opacity = 0;
        wrapLight.style.opacity = 1;
    }

    // logo animation
        marqueDark.style.opacity = 1;
        marqueLight.style.opacity = 0;
}

/*********************************
 * switchToSignIn
 ********************************/
function switchToSignIn() {
    if (isMobile()) {
        dark.style.opacity = 1;
        dark.style.pointerEvents = 'all';
        dark.style.zIndex = 3;
        light.style.opacity = 0;
        light.style.pointerEvents = 'none';
    } else {
        wrapDark.style.opacity = 1;
        wrapLight.style.opacity = 0;
    }

    // logo animation
        marqueDark.style.opacity = 0;
        marqueLight.style.opacity = 1;
}
switchToSignIn();