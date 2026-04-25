<?php
// daten trick holen
require __DIR__ . '/tricks-data.php';

function getTrickCard () {
    global $tricks;
    global $imgFilePath;

    // str:
    $s = "";
    
    foreach($tricks as $trick) {
        // info
        $img = $imgFilePath . $trick['image_path'];
        $id = $trick['id'];
        $titel = $trick['titel'];
        $difficulty = $trick['difficulty_name'];
        $difficultyColor = getDifficultyColor($difficulty);
        $category = $trick['category_name'];
        $date = date('j. M. Y', strtotime($trick['created_at'])); // <-- Claude
        // beschreibung
        $description = $trick['description'];


        // einfügen
        $s .= "
            <a href='tutorial.php?trickId=$id' class='card-trick'>
                    <!--Bild-->
                    <div class='img-wrapper box-bigImg'>
                        <img src='$img' alt='$titel' class='card-img'>
                    </div>
                    <!--Info-->
                    <div class='card-info'>
                        <div class='text card-info-name'>$titel</div>
                        <div class='text $difficultyColor'>$difficulty</div>
                        <div class='text card-info-categorie'>$category</div>
                        <div class='text'>$date</div>
                    </div>

                    <!--Description-->
                    <div class='text card-description'>
                        $description
                    </div>

                    <hr class='seperate'>
        ";

        // ist angemeldetß
        if (isset($_SESSION['login']) && $_SESSION['login']) {

        } else {
            // ist nicht angemeldet
            $s .= "   
            <!--Status-->
                    <div class='card-status'>
                        <!--Favorite-->
                        <div class='card-status-opt'>
                            <i class='fa-regular fa-star fa-sm'></i>
                            Favorite
                        </div>

                        <!--Lernen-->
                        <div class='card-status-opt'>
                            <i class='fa-regular fa-clock fa-sm'></i>
                            Lernen
                        </div>

                        <!--Gemeistert-->
                        <div class='card-status-opt'>
                            <i class='fa-solid fa-check fa-sm'></i>
                            Gemeistert
                        </div>
                    </div> 
            </a>";

        }

    }
   
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
        case 'fortgeschritten':
            return 'card-info-advanced';
        case 'experte':
            return 'card-info-hard';
        default:
            return 'card-info-easy';
    }
}