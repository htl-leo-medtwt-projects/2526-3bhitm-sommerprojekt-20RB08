<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Tricks</title>

    <!--Style-->
    <link rel="stylesheet" href="../mainStyle.css">
    <link rel="stylesheet" href="../styles/tricks-style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/29a9c6b8a3.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--Nav-->
    <div id="nav">
        <!--left-->
        <div id="nav-left">
            <!--Logo-->
            <div class="logo">
                Snow<span>trickr®</span>
            </div>
            <!--wege-->
            <a href="../index.php">Home</a>
            <a href="tricks.php" id="aktivePage">Browse Tricks</a>
        </div>

        <!--left-->
        <div id="nav-right">
            <!--Login-->
            <a href="" class="button">Sign up</a>
        </div>
    </div>

    <!--container-->
    <div id="container">
        <!--Filter-Area-->
        <div class="area" id="filter-area">
            <!--Info-->
            <div id="filter-info">
                <h2>Alle Snowboard Tricks</h2>
                <div class="text">Entdecke, lerne und mastere Snowboard tricks. Durchsuche die ganze Bibliothek, da ist für jeden etwas da.</div>
            </div>

            <!--Filter-search-->
            <div id="filter-search">
               <div id="filter-search">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input placeholder="Suche nach Tricks" type="text" name="text" class="input">
                    </div>
                </div>
            </div>

            <!--Filter-trick-->
            <div id="filter-tricks">
                <!--Schwierigkeit-->
                <div class="filter-trick">
                    <h3>Schwierigkeit</h3>
                    <div class="options">
                        <a href="#" class="option option-selected ">Alle</a>
                        <a href="#" class="option">Anfänger</a>
                        <a href="#" class="option">Fortgeschritten</a>
                        <a href="#" class="option">Experte</a>
                    </div>
                </div>

                <!--Kategorie-->
                <div class="filter-trick">
                    <h3>Schwierigkeit</h3>
                    <div class="options">
                        <a href="#" class="option option-selected ">Alle</a>
                        <a href="#" class="option">Grundlagen</a>
                        <a href="#" class="option">Rotationen</a>
                        <a href="#" class="option">Grabs</a>
                        <a href="#" class="option">Flips</a>
                    </div>
                </div>

                <!--Vorliebe-->
                <div class="filter-trick">
                    <h3>Vorliebe</h3>
                    <div class="options">
                        <a href="#" class="option option-selected ">Alle</a>
                        <a href="#" class="option">Favoriten</a>
                        <a href="#" class="option">Lernen</a>
                        <a href="#" class="option">Gemeistert</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="area">
            <h1>Knus schuzz</h1>
        </div>

        <!--Footer-->
        <div id="footer">
            <hr class="seperate-s">

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
            </div>
        </div>
    </div>
</body>

</html>