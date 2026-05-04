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
        return "
            <!--Header-->
            <div id='header'>
                <h1>FEHLER</h1>
                <div class='text'>Die Trick ID existiert nicht!</div>
            </div>
             ";
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
            <img src='../img/$img' onerror='../img/holder.png' class='box-bigImg'>
    ";

     // ist angemeldet
     $s .= "<!--trick bar-->
                <div id='trick-bar'>";
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        $s .= "
            <!--trick bar-->
            <form action='' method='post' class='status'>
                <!--Status-->
                <div class='status'>
                    <!--Favorite-->
                    <button type='submit' name='action' value='favorite' class='status-opt'>
                        <i class='fa-regular fa-star fa-sm'></i>
                        Favorite
                    </button>
                    <!--Lernen-->
                    <button type='submit' name='action' value='lenen' class='status-opt'>
                        <i class='fa-regular fa-clock fa-sm'></i>
                        Lernen
                    </button>

                    <!--Gemeistert-->
                    <button type='submit' name='action' value='gemeistert' class='status-opt'>
                        <i class='fa-solid fa-check fa-sm'></i>
                        Gemeistert
                    </button>
                </div>
            </form>
        ";
    } else {
        // nicht angemeldet
        #eigenschaften
        $s .= 
        "
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
        return ""; 
    }

    #trick
    $trick = getTrick($trickId);
    $titel = $trick['titel'];
    $description = $trick['description'];
    $tutorialImg = $trick['tutorial_path'];
    $tip = $trick['tip'];

    # beschreibung
    $s = "
        <div class='text'>
            $description
        </div>
    ";

    # how to
    $steps = getSteps();
    $s .= "<h3>How to $titel:</h3>
           <!--Steps-->
           <div class='steps'>";

    foreach($steps as $step) {
        $stepNr = sprintf('%02d', $step['step_number']);
        $text = $step['text'];

        $s .= "
            <!--Step-->
            <div class='step'>
                <sub>$stepNr</sub>
                <div class='text'>$text</div>
            </div>
        ";
    }

    $s .= "</div>";

    # tutorial img
    $s .= "
        <!--Tutorial img-->
        <img src='../img/$tutorialImg' alt='$titel tutorial'>
    ";

    # tip
    $s .= "
        <!--Tip-->
        <h3>Tip:</h3>
        <div class='steps'>
            <div class='text'>$tip</div>
        </div>
    ";
    
    # return
    return $s;
}

/**** getSteps ****/
function getSteps() {
    global $trickId;
    global $conn;

    // get steps from database 
    $stmt = $conn->prepare("SELECT * FROM step
                           WHERE trick = ?
                           order by step_number");
    $stmt->bind_param("i", $trickId);
    $stmt->execute();
    $result = $stmt->get_result();

    // convert result to array
    $steps = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $steps;
}