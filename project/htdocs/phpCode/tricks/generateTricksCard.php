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

        # angemeledte klassen
        $favoritClass = "";
        $learningClass = "";
        $masterdClass = "";

        // ist angemeldet
        if (isset($_SESSION['login']) && $_SESSION['login']) {
            $favoritClass  = isFavorite($trick) ? "isFavorite"     : "";
            $learningClass = islearned($trick)  ? "selectedStatus" : "";
            $masterdClass  = isMastered($trick) ? "selectedStatus" : "";
        }
            
        $s .= "   
        <!--Status-->
                <div class='card-status'>
                    <!--Favorite-->
                    <div class='card-status-opt $favoritClass'>
                        <i class='fa-regular fa-star fa-sm'></i>
                        Favorite
                    </div>

                    <!--Lernen-->
                    <div class='card-status-opt $learningClass'>
                        <i class='fa-regular fa-clock fa-sm'></i>
                        Lernen
                    </div>

                    <!--Gemeistert-->
                    <div class='card-status-opt $masterdClass'>
                        <i class='fa-solid fa-check fa-sm'></i>
                        Gemeistert
                    </div>
                </div> 
        </a>";
    }
   
    return $s;
}

/***********************
 * getDifficultyColor
 ***+******************/
function getDifficultyColor($name) {
    $newName = strtolower(trim($name));

    switch ($newName) {
        case 'anfänger': return 'card-info-easy';
        case 'fortgeschritten': return 'card-info-advanced';
        case 'experte': return 'card-info-hard';
        default: return 'card-info-easy';
    }
}

/***********************
 * is ..
 ***+******************/
# is favorite
function isFavorite($trick) {
    return trim(strtolower($trick['is_favorite'] ?? '')) === 'y';
}

# is learned
function islearned($trick) {
    return trim(strtolower($trick['status_name'] ?? '')) === 'lernen';
}

# is mastered
function isMastered($trick) {
    return trim(strtolower($trick['status_name'] ?? '')) === 'gemeistert';
}
