<?php
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/*************************
 * get userTrick
 **************************/
$stmt = $conn->prepare("SELECT * FROM `user_trick` WHERE user = ? ORDER BY lastchanged DESC");
$stmt->bind_param("s", $_SESSION['user']['username']);
$stmt->execute();

$res = $stmt->get_result();
$userTricks = mysqli_fetch_all($res, MYSQLI_ASSOC);


/*************************
 * funktionen counter
 **************************/
function getFavoriteCount() {
    global $userTricks;
    $count = 0;

    foreach($userTricks as $userTrick) {
        if (strtolower($userTrick['is_favorite']) == 'y') {
            $count++;
        }
    }

    return $count;
}

function getStatusCount($statusNum) {
    global $userTricks;
    $count = 0;

    foreach($userTricks as $userTrick) {
        if ($userTrick['status'] == $statusNum) {
            $count++;
        }
    }

    return $count;
}

/*************************
 * print lastTricks
 **************************/
function printLastTricks() {
    global $conn;

    # get info
    $stmt = $conn->prepare("SELECT ut.user as username, 
                                t.titel as trick_name,
                                t.id as trick_id,
                                c.name as category_name,
                                d.name as difficulty_name
                            FROM `user_trick` ut
                            JOIN status s on (s.id = ut.status)
                            JOIN trick t on (t.id = ut.trick)
                            JOIN difficulty d on (t.difficulty = d.id)
                            JOIN category c on (t.category = c.id)
                            WHERE user = ?
                            ORDER BY lastchanged DESC
                            LIMIT 4");
    $stmt->bind_param("s", $_SESSION['user']['username']);
    $stmt->execute();

    $res = $stmt->get_result();
    $history = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    $s = "";

    foreach($history as $entry) {
        $titel = $entry['trick_name'];
        $trickId = $entry['trick_id'];
        $category = $entry['category_name'];
        $difficulty = $entry['difficulty_name'];
        $difficultyClass = getDifficultyColor($difficulty);

         $s .= "
                <!--Trick-->
                <a href='tutorial.php?trickId=$trickId' class='trick'>
                    <!--Trick info -->
                    <div class='trick-info'>
                        <h3>$titel</h3>
                        <div class='text'>$category</div>
                    </div>
                    <!--Difficulty-->
                    <div class='$difficultyClass'>$difficulty</div>
                </a>
        ";
    }

    echo $s;
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
