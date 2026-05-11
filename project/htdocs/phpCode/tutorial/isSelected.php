<?php
// conntection
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/******************************
 * Is favorised
 *****************************/
function isFavorised() {
    global $conn;
    global $trickId;

    // falsche id oder nicht angemeldet
    if($trickId == -1 || !isset($_SESSION['login']) || !$_SESSION['login']){
        return false;
    }

    # nachschauen nach trick
    $stmt = $conn->prepare("SELECT 
                                ut.user, 
                                ut.trick, 
                                ut.is_favorite,
                                ut.lastchanged,
                                s.name
                            FROM trick t
                            LEFT JOIN user_trick ut ON ut.trick = t.id
                                                AND ut.user  = ?   -- ← hier, nicht in WHERE
                            LEFT JOIN status s      ON s.id     = ut.status
                            WHERE t.id = ?;");
    $stmt->bind_param("si", $_SESSION['user']['username'], $trickId);
    $stmt->execute();
    $res = $stmt->get_result();

    $userTrick = mysqli_fetch_all($res, MYSQLI_ASSOC);

    #echo '<pre>';
    #print_r($userTrick);
    #echo '</pre>';

    return strtolower($userTrick[0]['is_favorite'] ?? 'n') == 'y';
}

/******************************
 * Is selected
 *****************************/
function isSelected($status) {
    global $conn;
    global $trickId;

    // falsche id oder nicht angemeldet
    if($trickId == -1 || !isset($_SESSION['login']) || !$_SESSION['login']){
        return false;
    }


    # nachschauen nach trick
    $stmt = $conn->prepare("SELECT 
                                ut.user, 
                                ut.trick, 
                                ut.is_favorite,
                                ut.lastchanged,
                                s.name status_name
                            FROM trick t
                            LEFT JOIN user_trick ut ON ut.trick = t.id
                                                AND ut.user  = ?   -- ← hier, nicht in WHERE
                            LEFT JOIN status s      ON s.id     = ut.status
                            WHERE t.id = ?;");
    $stmt->bind_param("si", $_SESSION['user']['username'], $trickId);
    $stmt->execute();
    $res = $stmt->get_result();

    $userTrick = mysqli_fetch_all($res, MYSQLI_ASSOC);

    #echo '<pre>';
    #print_r($userTrick);
    #echo '</pre>';

    return strtolower($userTrick[0]['status_name'] ?? '') == strtolower($status);
}