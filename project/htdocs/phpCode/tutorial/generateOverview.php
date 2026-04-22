<?php
// conntection
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/***************************
 * generate Overview
 *************************/
function getOverview() {
    global $trickId;
    // fehler der id
    if ($trickId == -1) {
        echo $trickId;
        echo "FEHLER!";
        return;
    }

     // ist angemeldet
    if (isset($_SESSION['login']) && $_SESSION['login']) {

    } else {
        // nicht angemeldet
        var_dump(getTrick($trickId));
    }
}

"
        <!--overview-->
        <div class='area' id='overview'>
            <!--Header-->
            <div id='header'>
                <h1>Ollie</h1>
                <div class='text'>12. Jul. 2024</div>
            </div>

            <!--Big img-->
            <img src='../img/image.png' alt='curv' class='box-bigImg'>

            <!--trick bar-->
            <div id='trick-bar'>
                <!--Status-->
                <div class='status'>
                    <!--Favorite-->
                    <a href='#' class='status-opt'>
                        <i class='fa-regular fa-star fa-sm'></i>
                        Favorite
                    </a>

                    <!--Lernen-->
                    <a href='#' class='status-opt'>
                        <i class='fa-regular fa-clock fa-sm'></i>
                        Lernen
                    </a>

                    <!--Gemeistert-->
                    <a  href='#'class='status-opt'>
                        <i class='fa-solid fa-check fa-sm'></i>
                        Gemeistert
                    </a>
                </div>

                <!--Schwirigkeit-->
                <div class='text'>Schwierigkeit</div>
            </div>
";