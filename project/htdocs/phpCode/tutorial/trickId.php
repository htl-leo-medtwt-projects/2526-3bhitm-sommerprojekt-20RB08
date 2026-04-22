<?php 
// connection 
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/**********************
 * get Trick id
 * *******************/
$trickId = -1;

$trickIdStr = (isset($_GET['trickId'])) ? $_GET['trickId'] : -1;

$trick = getTrick($trickIdStr);

if (!empty($trick)){
    $trickId = $trick[0]['id'];
}

// get trick
function getTrick($strId) {
    global $conn;
    // sql vorbereiten
    $sql = "SELECT * FROM `trick` 
            WHERE id = ?";

    // query ausführen
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $strId);
    $stmt->execute();
    $result = $stmt->get_result();

    $trick = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $trick;
}