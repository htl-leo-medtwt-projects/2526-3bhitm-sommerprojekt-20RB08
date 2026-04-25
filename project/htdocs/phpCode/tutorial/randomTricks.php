<?php
// conntection
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/*************************
 * get getThreeRandoTrick (claude)
 ***********************/
function getThreeRandomTrick() {
    global $conn;
    global $trickId;

    $sql = "SELECT t.id, t.titel, t.created_at, t.description, t.image_path, t.tip, t.tutorial_path,
            d.name as difficulty_name,
            c.name as category_name
            FROM trick t
            JOIN difficulty d ON t.difficulty = d.id
            JOIN category c ON t.category = c.id
            WHERE t.id != $trickId # nich der trick zeigen der gezeigt wird (von mir)
            ORDER BY RAND()
            LIMIT 3";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC);
}

/*************************
 * getMiniCards
 ***********************/
function getMiniCards() {
    $tricks = getThreeRandomTrick();

    $s = "";

    foreach($tricks as $trick) {
        $id = $trick['id'];
        $img = $trick['image_path'];
        $titel = $trick['titel'];
        $difficulty = $trick['difficulty_name'];
        $difficultyClass = getDifficultyColor($trick['difficulty_name']);

        # generate card
        $s .= "
                <!--Card-->
                <a href='?trickId=$id' class='card'>
                    <img src='../img/$img' alt='$titel' class='box-bigImg'>
                    <div class='card-info'>
                        <div class='text card-name'>$titel</div>
                        <div class='text $difficultyClass'>$difficulty</div>
                    </div>
                </a>
        ";
    }

    return $s;
}