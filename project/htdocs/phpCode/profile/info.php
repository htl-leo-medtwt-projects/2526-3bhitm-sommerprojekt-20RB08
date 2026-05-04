<?php
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

/*************************
 * get userTrick
 **************************/
$stmt = $conn->prepare("SELECT * FROM user_trick WHERE user = ?");
$stmt->bind_param("s", $_SESSION['user']['username']);