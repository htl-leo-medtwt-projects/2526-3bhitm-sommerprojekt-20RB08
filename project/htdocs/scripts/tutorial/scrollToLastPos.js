/********************************
 *  Scroll to last Position (claude)
 ******************************/
// Scroll-Position vor dem Absenden speichern
document.querySelector('form').addEventListener('submit', function() {
    sessionStorage.setItem('scrollPos', window.scrollY);
});

// Nach dem Laden wieder hinscrollen
window.addEventListener('load', function() {
    const scrollPos = sessionStorage.getItem('scrollPos');
    if (scrollPos) {
        window.scrollTo(0, parseInt(scrollPos));
        sessionStorage.removeItem('scrollPos');
    }
});