/*********************************
 * Generiere Text
 ********************************/
const slangs = [
    "Neues Ausprobieren.",
    "Nach was neues zu schauen?",
    "Probiere es aus!",
    "Level up dein skill."
]
const slang = document.getElementById('slang');

let s = ""
for (let i = 0; i < slangs.length; i++) {
    s += `<p>${slangs[i]}</p>`;
}
slang.innerHTML = s;

/*********************************
 * Starte Animation
 ********************************/
let slangIndex = 0;
const goUp = 60;

const textAnimation = setInterval(() => {
    slangIndex = (slangIndex + 1) % slangs.length;
    slang.style.top = `-${slangIndex * goUp}px`;
}, 3000);
