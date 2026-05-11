<?php
/************************
 * check actions
 ***********************/
if (isset($_POST['action'])) {
    # ist angemeldet
    require_once __DIR__ . '/../../datenBank/auth_check.php';

    # ensure usert trick exists
    ensureUserTrickExists();

    $action = trim(strtolower($_POST['action']));
    $username = $_SESSION['user']['username'];

    # aktuellen user_trick-Eintrag holen
    $stmt = $conn->prepare("SELECT is_favorite, status FROM user_trick WHERE user = ? AND trick = ?");
    $stmt->bind_param("si", $username, $trickId);
    $stmt->execute();
    $res = $stmt->get_result();
    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);

    #get curren row
    $currentRow = null;
    if (count($rows) > 0) {
        $currentRow = $rows[0];
    }


    /************************
     * favorisiert
     ***********************/
    if($action == "favorite") {
        
    } 


    /************************
     * lernen / gemeistert
     ***********************/
}

/************************
 * funktionen
 ***********************/
function ensureUserTrickExists() {
    // check if row exists, if not INSERT
    global $conn;
    global $trickId;
    $username = $_SESSION['user']['username'];

    $stmt = $conn->prepare("SELECT * FROM `user_trick` WHERE user = ? and trick = ?");
    $stmt->bind_param("si", $username, $trickId);
    $stmt->execute();

    $res = $stmt->get_result();
    $userTrick = mysqli_fetch_all($res, MYSQLI_ASSOC);

    # ist kein eintrag?
    if (empty($userTrick)) {
        $stmt = $conn->prepare("INSERT INTO `user_trick` (`user`, `trick`, `is_favorite`, `status`) 
                               VALUES (?, ?, 'N', 1)");     
        $stmt->bind_param("si", $username, $trickId);
        $stmt->execute();
    }
}