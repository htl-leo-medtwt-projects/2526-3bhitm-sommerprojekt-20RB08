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

    #trick
    $trick = getTrick($trickId);
    $titel = $trick['titel'];
    $date = date('j. M. Y', strtotime($trick['created_at']));
    $img = $trick['image_path'];

    # string
    $s = "
            <!--overview-->
            <div class='area' id='overview'>
                <!--Header-->
                <div id='header'>
                    <h1>$titel</h1>
                    <div class='text'>$date</div>
                </div>

                <!--Big img-->
                <img src='../img/$img' alt='curv' class='box-bigImg'>
    ";

     // ist angemeldet
    if (isset($_SESSION['login']) && $_SESSION['login']) {

    } else {
        // nicht angemeldet
       
        #eigenschaften
        
        $s .= 
        "
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
        ";
    }

    # schwierigkeit + ende
    $difficultyName = $trick['difficulty_name'];
    $difficultyClass = getDifficultyColor($trick['difficulty_name']);
    $s .= "
                <!--Schwirigkeit-->
                <div class='text $difficultyClass'>$difficultyName</div>
            </div>
        </div>
    ";

    return $s;
}

/***********************
 * getDifficultyColor
 ***+******************/
function getDifficultyColor($name) {
    $newName = strtolower(trim($name));

    switch ($newName) {
        case 'anfänger':
            return 'card-info-easy';
        case 'card-info-advanced':
            return 'card-info-advanced';
        case 'experte':
            return 'card-info-hard';
        default:
            return 'card-info-easy';
    }
}