/*********************************
 * Create Footer
 * ******************************/
const footer = document.getElementById('footer');
const footerInput = `<hr class="seperate-s">

                <!--nav-->
                <div id="footer-nav">
                    <!--Logo-->
                    <div class="logo">
                        Snow<span>trickr®</span>
                    </div>

                    <!--Infos-->
                    <div id="footer-infos">
                        <!--info-->
                        <div class="footer-info">
                            <div class="fh">About</div>
                            <div>Contact</div>
                            <div>Support</div>
                        </div>
                        <!--info-->
                        <div class="footer-info">
                            <div class="fh">Snowboarding</div>
                            <div>Contact</div>
                            <div>Support</div>
                        </div>
                    </div>
                </div>`
function createFooter() {
    footer.innerHTML = footerInput;
}
createFooter();

/*********************************
 * Create Nav
 * ******************************/
const nav = document.getElementById('nav');
const navInput = `<!--left-->
        <div id="nav-left">
            <!--Logo-->
            <div class="logo">
                Snow<span>trickr®</span>
            </div>
            <!--wege-->
            <a href="index.html" id="aktivePage">Home</a>
            <a href="pages/tricks.php">Browse Tricks</a>
        </div>

        <!--left-->
        <div id="nav-right">
            <!--Login-->
            <a href="" class="button">Sign up</a>
        </div>`;
function createNav() {
    nav.innerHTML = navInput;
}