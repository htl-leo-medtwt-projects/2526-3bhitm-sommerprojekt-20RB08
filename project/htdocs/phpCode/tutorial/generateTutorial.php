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
                        <a href='./account.php' class='status-opt'>
                            <i class='fa-regular fa-star fa-sm'></i>
                            Favorite
                        </a>

                        <!--Lernen-->
                        <a href='./account.php' class='status-opt'>
                            <i class='fa-regular fa-clock fa-sm'></i>
                            Lernen
                        </a>

                        <!--Gemeistert-->
                        <a  href='./account.php'class='status-opt'>
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
    ";

    return $s;
}

/*** getDifficultyColor ***/
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

/***************************
 * get detail
 *************************/
function getDetail() {
    global $trickId;
    // fehler der id
    if ($trickId == -1) {
        echo $trickId;
        echo "FEHLER!";
        return;
    }

    #trick
    $trick = getTrick($trickId);
    $description = $trick['description'];
    $tutorialImg = $trick['tutorial_path'];
    $tip = $trick['tip'];
    
}

/**** getSteps ****/
function getSteps() {
    global $trickId;

   
}
"
            
<div class='text'>
                Bla Bla Bla Bla
            </div>

            <h3>How to Name von trick</h3>
                <!--Steps-->
                <div class='steps'>
                    <!--Step-->
                    <div class='step'>
                        <sub>01</sub>
                        <div class='text'>Schirt 1 wird hier beschrieben, Schirt 1 wird hier beschrieben Schirt 1 wird hier beschrieben Schirt 1 wird hier beschrieben</div>
                    </div>
                    <!--Step-->
                    <div class='step'>
                        <sub>02</sub>
                        <div class='text'>Schirt 2 wird hier beschrieben</div>
                    </div>
                    <!--Step-->
                    <div class='step'>
                        <sub>03</sub>
                        <div class='text'>Schirt 4 wird hier beschrieben</div>
                    </div>
                </div>

                <!--Tutorial img-->
                <img src='../img/tutorial/ollie.png' alt='ollie'>

                <!--Tip-->
                <h3>Tip</h3>
                <div class='steps'>
                    <div class='text'>Hierr würde ein tip stehen für die Neugierigen snowboarder</div>
                </div>
";