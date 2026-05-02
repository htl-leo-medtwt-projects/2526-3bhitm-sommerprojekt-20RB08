const dark = document.getElementById('dark');
const light = document.getElementById('light');
const wrapDark = document.getElementById('wrap-dark');
const wrapLight = document.getElementById('wrap-light');

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
}
