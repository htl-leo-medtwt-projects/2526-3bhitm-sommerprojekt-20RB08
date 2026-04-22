<?php 
// connection 
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/**********************
 * get Trick id
 * *******************/
$trickId = -1;

$trickIdStr = (isset($_GET['trickId'])) ? $_GET['trickId'] : -1;

// sql vorbereiten
$sql = "SELECT * FROM `trick` 
        WHERE id = ?";

// query ausführen
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $trickIdStr);
$stmt->execute();
$result = $stmt->get_result();

$trick = mysqli_fetch_all($result, MYSQLI_ASSOC);

if ($trick != null){
    $trickId = $trick[0]['id'];
}