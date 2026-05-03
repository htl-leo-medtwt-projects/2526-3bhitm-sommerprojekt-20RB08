<?php
# session starte
session_start();

# get log
require "../phpCode/log.php";

require  __DIR__ . '/../phpCode/tutorial/trickId.php';

// require
require __DIR__ . '/../phpCode/tutorial/generateTutorial.php';

require __DIR__ . '/../phpCode/tutorial/randomTricks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>

    <!--Style-->
    <link rel="stylesheet" href="../mainStyle.css">
    <link rel="stylesheet" href="../styles/tutorial-style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/29a9c6b8a3.js" crossorigin="anonymous"></script>

    <!-- Script -->
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
            <a href="tricks.php?" id="aktivePage">Browse Tricks</a>
        </div>

         <!--left-->
        <div id="nav-right">
            <!--Login-->
            <?php echo getLogButton('../') ?>
        </div>
    </div>

    <!--container-->
    <div id="container">
        <!--overview-->
        <div class='area' id='overview'>
            <?php echo getOverview() ?>
        </div>

        <!--Detail-->
        <div class="area" id="detail">
            <?php echo getDetail() ?>
        </div>

        <hr class="seperate-s">

        <!--Weitere tricks-->
        <div id="feed">
            <!--info-->
            <div class="info">
                <h3>Schaue nach Neuen Tricks</h3>
                <div class="text">Durchsuche die besten Trick zum level up</div>
            </div>

            <!--mini-cards-->
            <div id="cards">
                <?php echo getMiniCards() ?>
            </div>
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