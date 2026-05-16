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
