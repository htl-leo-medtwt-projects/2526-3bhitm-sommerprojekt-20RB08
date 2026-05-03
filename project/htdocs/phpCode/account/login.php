<?php
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

# errro login
$errorsLogin = [];

if (!empty($_POST['login'])) {
    # get data from POST array
    $_username = $_POST["username"];
    $_password = $_POST["password"];

    /* User from db */
    $stmt = $conn->prepare(
        "SELECT * FROM user WHERE username = ? LIMIT 1"
    );
    $stmt->bind_param("s", $_username);
    $stmt->execute();

    $res = $stmt->get_result();

    if ($res->num_rows === 1){
        $user = $res->fetch_assoc();

        /* Passwort prüfen */
        if(password_verify($_password, $user["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["user"] = $user;

            /* last_login aktuakisieren */
            #$stmt = $conn->prepare(
            #    "UPDATE login_username SET last_login = NOW() WHERE id = ?"
            #);
            #$stmt->bind_param("i", $user["id"]);
            #$stmt->execute();

            #login war erfolgreich
            header("Location: ../index.php");
        } else {
            $errorsLogin[] = "Passwort ist falsch!";
            $usernameHolder = $_username;
        }
    } else {
        $errorsLogin[] = "Benutzer nicht gefunden";
    }
}