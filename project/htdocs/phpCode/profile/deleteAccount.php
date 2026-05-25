<?php
# auth check
require_once __DIR__ . "/../../datenBank/auth_check.php";
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

# is delete wandet?
if (isset($_POST['deleteAccount'])) {
    # delete all userTrick
    $stmt = $conn->prepare("DELETE FROM user_trick WHERE user = ?");
    $stmt->bind_param("s", $_SESSION['user']['username']);
    $stmt->execute();

    # user löschen
    $stmt = $conn->prepare("DELETE FROM user WHERE username = ?");
    $stmt->bind_param("s", $_SESSION['user']['username']);
    $stmt->execute();

    # abmelden
    require_once __DIR__ . "/../account/logout.php";
}

# auf die Startseite 
header("Location: /index.php");
exit();