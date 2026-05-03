/***************************
 * Generate marque
 **************************/
let marqueContainers = document.querySelectorAll('.marque-container');

// input
let logos = "";

// logo direction
for (let i = 0; i < 10; i++){
    // wrapper
    logos += `<div class="marquee-wrapper">`;

    // direction
    if (i % 2 == 0) {
        logos += `<div class="marquee-track">`;
    } else {
        logos += `<div class="marquee-track-reverse">`;
    }

    // logo
    logos += `
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                        <span>SNOW<span class="logoColor">TRICKR®</span></span>
                    </div>
                </div>`;
}

// add marque container
marqueContainers.forEach(container => {
    container.innerHTML = logos;
});