<?php
# session starte
session_start();

# get log
require "../phpCode/log.php";
// imdfilepath
$imgFilePath = "../img/";
// requre
require __DIR__ . '/../phpCode/tricks/filter.php';
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

    <!-- Script -->
     <script src="../scripts/tricks/search.js" defer></script>
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
            <a href="tricks.php?difficulty=all&category=all&preference=all&search=" id="aktivePage">Browse Tricks</a>
        </div>

         <!--left-->
        <div id="nav-right">
            <!--Login-->
            <?php echo getLogButton() ?>
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
                        <input id="searchInput" placeholder="Suche nach Tricks" type="text" name="text" class="input" value="<?php echo $_SESSION['filter']['search'] ?? '' ?>">
                    </div>
                </div>
            </div>

            <!--Filter-trick-->
            <div id="filter-tricks">
                <!--Schwierigkeit-->
                <div class="filter-trick">
                    <h3>Schwierigkeit</h3>
                    <div class="options">
                        <a href="?difficulty=all"               class="option <?php echo isDifficultySelected("all") ?>">               Alle</a>
                        <a href="?difficulty=anfänger"          class="option <?php echo isDifficultySelected("anfänger") ?>">          Anfänger</a>
                        <a href="?difficulty=fortgeschritten"   class="option <?php echo isDifficultySelected("fortgeschritten") ?>">   Fortgeschritten</a>
                        <a href="?difficulty=experte"           class="option <?php echo isDifficultySelected("experte") ?>">           Experte</a>
                    </div>
                </div>

                <!--Kategorie-->
                <div class="filter-trick">
                    <h3>Kategorie</h3>
                    <div class="options">
                        <a href="?category=all"         class="option <?php echo isCategorySelected("all") ?>">         Alle</a>
                        <a href="?category=grundlagen"  class="option <?php echo isCategorySelected("grundlagen") ?>">  Grundlagen</a>
                        <a href="?category=rotationen"  class="option <?php echo isCategorySelected("rotationen") ?>">  Rotationen</a>
                        <a href="?category=grabs"       class="option <?php echo isCategorySelected("grabs") ?>">       Grabs</a>
                        <a href="?category=jibbing"       class="option <?php echo isCategorySelected("jibbing") ?>">   Jibbing</a>
                        <a href="?category=flips"       class="option <?php echo isCategorySelected("flips") ?>">       Flips</a>
                    </div>
                </div>

                <!--Vorliebe-->
                <div class="filter-trick">
                    <h3>Vorliebe</h3>
                    <div class="options">
                        <a href="?preference=all"           class="option <?php echo isPreferenceSelected("all") ?> ">          Alle</a>
                        <a href="?preference=favoriten"     class="option <?php echo isPreferenceSelected("favoriten") ?> ">    Favoriten</a>
                        <a href="?preference=lernen"        class="option <?php echo isPreferenceSelected("lernen") ?> ">       Lernen</a>
                        <a href="?preference=gemeistert"    class="option <?php echo isPreferenceSelected("gemeistert") ?>" >   Gemeistert</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Card Tricks-->
        <div class="area" id="card-tricks">
            <!--Card-Trick-->
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