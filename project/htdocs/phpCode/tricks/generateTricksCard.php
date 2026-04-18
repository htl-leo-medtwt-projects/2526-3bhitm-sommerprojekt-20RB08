<?php
// session starten
session_start();

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
        $titel = $trick['titel'];
        $difficulty = $trick['difficulty_name'];
        $category = $trick['category_name'];
        $date = date('j. M. Y', strtotime($trick['created_at'])); // <-- Claude
        // beschreibung
        $description = $trick['description'];


        // einfügen
        $s .= "
            <div class='card-trick'>
                    <!--Bild-->
                    <img src='$img' alt='curv' class='box-bigImg'>
                    <!--Info-->
                    <div class='card-info'>
                        <div class='text card-info-name'>$titel</div>
                        <div class='text card-info-easy'>$difficulty</div>
                        <div class='text card-info-categorie'>$category</div>
                        <div class='text'>$date</div>
                    </div>

                    <!--Description-->
                    <div class='text card-description'>
                        $description
                    </div>

                    <hr class='seperate'>
        ";

        
    }
   
    return $s;
}