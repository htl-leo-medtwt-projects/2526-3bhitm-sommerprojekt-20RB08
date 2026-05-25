<?php
# session starten
session_start();

# auth check
require "../datenBank/auth_check.php";

# get log
require "../phpCode/log.php";

# get info
require "../phpCode/profile/info.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!--Style-->
    <link rel="stylesheet" href="../mainStyle.css">
    <link rel="stylesheet" href="../styles/profile-style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/29a9c6b8a3.js" crossorigin="anonymous"></script>
    <script src="../scripts/profile/delete.js" defer></script>
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
            <a href="tricks.php?difficulty=all&category=all&preference=all&search=">Browse Tricks</a>
        </div>

         <!--left-->
        <div id="nav-right" style="text-decoration: underline; color: white;">
            <!--Login-->
            <?php echo getLogButton('../') ?>
        </div>
    </div>

     <!--container-->
    <div id="container">
        <!--Profile-->
        <div class="area" id="profile">
            <!-- Account info-->
            <div id="info">
                <div>
                    <h1><?php echo $_SESSION['user']['username'] ?></h1>
                    <div class="text"><?php echo $_SESSION['user']['email'] ?></div>
                </div>

                <a href="../phpCode/account/logout.php" class="text" id="logout">Abmelden <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>

            <!--progresses-->
            <div id="progresses">
                <!--progress-->
                <div class="progress">
                    <h2><?php echo getStatusCount(3) ?></h2>
                    <div class="text">Gemeistert</div>
                </div>
                <div class="progress">
                    <h2><?php echo getStatusCount(2) ?></h2>
                    <div class="text">Lernen</div>
                </div>
                <div class="progress">
                    <h2><?php echo getFavoriteCount() ?></h2>
                    <div class="text">Favoriten</div>
                </div>
            </div>

            <!--last tricks-->
            <h2 class="light-padding">Mein Fortschritt</h2>

            <div id="lastTricks">
                <?php printLastTricks() ?>
            </div>

            <!--delet account Button-->
            <div class="text" id="deleteButton" onclick="showDeleteInfo()">
                <i class="fa-solid fa-delete-left"></i>
                Konto Löschen
            </div>

            <!--delete acount info--> 
            <div id="deleteAlter">
                <!--cancel--> 
                <div class="cancel" onclick="cancelDeleteAccount()"></div>
                <!--info-->
                <div id="deleteInfo">
                    <h2>Konto Löschen</h2>
                    <div class="text">
                        Durch das Löschen des Accounts werden alle gespeicherten, favorisierten und erlernten Tricks 
                        dauerhaft entfernt. Zudem wird das Konto vollständig aus dem System gelöscht.
                    </div>
                    <!--DeleteAccoutn-->
                    <form action="../phpCode/profile/deleteAccount.php" method="post">
                        <input name="deleteAccount" type="submit" value="Löschen" class="button">
                    </form>
                </div>
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