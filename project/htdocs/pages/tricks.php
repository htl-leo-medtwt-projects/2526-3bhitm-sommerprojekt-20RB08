<?php
// session starten
session_start();
/******************
 *  FILTER
 *****************/
if (!isset($_SESSION['filter'])) {
    $_SESSION['filter'] = [
        'search'        => '',
        'difficulty'    => 'all',
        'category'      => 'all',
        'preference'    => 'all'
    ];
}
// get?
# search
if (isset($_GET['search'])){
    $_SESSION['filter']['search'] = $_GET['search'];
}

#schwierikeit
if (isset($_GET['difficulty'])){
    $_SESSION['filter']['difficulty'] = $_GET['difficulty'];
}

#kategorie
if (isset($_GET['category'])){
    $_SESSION['filter']['category'] = $_GET['category'];
}

#vorliebe
if (isset($_GET['preference'])){
    $_SESSION['filter']['preference'] = $_GET['preference'];
}


// imdfilepath
$imgFilePath = "../img/";
// requre
require __DIR__ . '/../phpCode/tricks/generateTricksCard.php';
?>
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
                        <a href="?difficulty=all" class="option option-selected ">Alle</a>
                        <a href="?difficulty=anfänger" class="option">Anfänger</a>
                        <a href="?difficulty=fortgeschritten" class="option">Fortgeschritten</a>
                        <a href="?difficulty=experte" class="option">Experte</a>
                    </div>
                </div>

                <!--Kategorie-->
                <div class="filter-trick">
                    <h3>Kategorie</h3>
                    <div class="options">
                        <a href="?category=all" class="option option-selected ">Alle</a>
                        <a href="?category=grundlagen" class="option">Grundlagen</a>
                        <a href="?category=rotationen" class="option">Rotationen</a>
                        <a href="?category=grabs" class="option">Grabs</a>
                        <a href="?category=flips" class="option">Flips</a>
                    </div>
                </div>

                <!--Vorliebe-->
                <div class="filter-trick">
                    <h3>Vorliebe</h3>
                    <div class="options">
                        <a href="?preference=all" class="option option-selected ">Alle</a>
                        <a href="?preference=allfavoriten" class="option">Favoriten</a>
                        <a href="?preference=lernen" class="option">Lernen</a>
                        <a href="?preference=gemeistert" class="option">Gemeistert</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Card Tricks-->
        <div class="area" id="card-tricks">
            <!--Card-Trick-->
            <a href="trickinformation.php" class="card-trick">
                <!--Bild-->
                <img src="../img/image.png" alt="curv" class="box-bigImg">
                <!--Info-->
                <div class="card-info">
                    <div class="text card-info-name">Curven</div>
                    <div class="text card-info-easy">Anfänger</div>
                    <div class="text card-info-categorie">Grundlagen</div>
                    <div class="text">4, Dez. 2025</div>
                </div>

                <!--Description-->
                <div class="text card-description">
                    Berschreibung, tricks für dennen die sowas lernen möchten
                    Knuss aber wer sagt schmutz, keine ahnung was ich schreiben soll
                </div>

                <hr class="seperate">

                <!--Status-->
                <div class="card-status">
                    <!--Favorite-->
                    <div class="card-status-opt">
                        <i class="fa-regular fa-star fa-sm"></i>
                        Favorite
                    </div>

                    <!--Lernen-->
                    <div class="card-status-opt">
                        <i class="fa-regular fa-clock fa-sm"></i>
                        Lernen
                    </div>

                     <!--Gemeistert-->
                    <div class="card-status-opt">
                        <i class="fa-solid fa-check fa-sm"></i>
                        Gemeistert
                    </div>
                </div> 
            </a>

            <?php echo getTrickCard() ?>
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