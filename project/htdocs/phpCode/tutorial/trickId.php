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
    $trickId = $trick['id'];
}

// get trick
function getTrick($strId) {
    global $conn;
    // sql vorbereiten
    $sql = "SELECT t.id, t.titel, t.created_at, t.description, t.image_path, t.tip, 
            d.name as difficulty_name,
            c.name as category_name
            FROM `trick` t
            join difficulty d on (t.difficulty = d.id)
            join category c on (t.category = c.id)
            WHERE t.id = ?";

    // query ausführen
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $strId);
    $stmt->execute();
    $result = $stmt->get_result();

    $trick = mysqli_fetch_all($result, MYSQLI_ASSOC);;
    return $trick[0];
}