
// wrap
const wrapDark = document.getElementById('wrap-dark');
const wrapLight = document.getElementById('wrap-light');

/*********************************
 * switchToSignUp
 ********************************/
function switchToSignUp() {
    wrapDark.style.opacity = 0;
    wrapLight.style.opacity = 1;
}

/*********************************
 * switchToSignIn
 ********************************/
function switchToSignIn() {
    wrapDark.style.opacity = 1;
    wrapLight.style.opacity = 0;
}