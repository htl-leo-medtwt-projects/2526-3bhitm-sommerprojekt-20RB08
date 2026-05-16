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
        $newFav = (strtolower($currentRow['is_favorite']) === 'y' ) ? 'N' : 'Y';
        $stmt = $conn->prepare("UPDATE user_trick SET is_favorite = ? WHERE user = ? AND trick = ?");
        $stmt->bind_param("ssi", $newFav, $username, $trickId); 
        $stmt->execute();
    } 

    /******************************
     * lernen / gemeistert (claude)
     *****************************/
    if ($action === 'lernen' || $action === 'gemeistert') {
        # Status-ID aus der Tabelle holen
        $stmt = $conn->prepare("SELECT id FROM status WHERE LOWER(name) = ?");
        $stmt->bind_param("s", $action);
        $stmt->execute();
        $statusRow = $stmt->get_result()->fetch_assoc();
        $statusId  = $statusRow ? $statusRow['id'] : null;

        # Toggle: wenn schon dieser Status aktiv → auf NULL, sonst setzen
        $newStatus = ($currentRow && $currentRow['status'] == $statusId) ? null : $statusId;

        $stmt = $conn->prepare("UPDATE user_trick SET status = ? WHERE user = ? AND trick = ?");
        $stmt->bind_param("isi", $newStatus, $username, $trickId);
        $stmt->execute();
    }

    # delete useles user
    deleteUselessTrickExists();

    # redireck auf sich selber (um post zu löschen)
    header("Location: /pages/tutorial.php?trickId=$trickId");
    exit;
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

function deleteUselessTrickExists() {
    // check if row exists, if not INSERT
    global $conn;

    $res = $conn->query("DELETE FROM user_trick WHERE (status is null or status = 1) and (lower(is_favorite) like 'n' or is_favorite is null)");

    if (!$res){
        echo "Fehler beim löschen";
    }
}