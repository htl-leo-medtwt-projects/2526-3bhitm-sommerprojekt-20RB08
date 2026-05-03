<?php
# conn
require_once __DIR__ . '/../../datenBank/mysqlConnection.php';

// error message
$errorMesagesCreate = [];


if (!empty($_POST['createUser'])){
    # get data from POST array and parse database special characters.
    # this is neede to block hacking attacks
    $_email = $conn->real_escape_string($_POST["email"]);
    $_username = $conn->real_escape_string($_POST["username"]);
    $_password = $conn->real_escape_string($_POST["password1"]);


    // email überprüfen (claude)
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMesagesCreate[] = 'Ungültige E-Mail-Adresse';
    } elseif (strlen($_email) >= 100) {
        $errorMesagesCreate[] = 'Email ist zu lang';
    } 

    // username überprüfen
    if (!empty($_username) && strlen($_username) <= 30) {
        $sql = "SELECT * FROM user WHERE username = '$_username'";
        $result = $conn->query($sql);
        // convert
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (count($user) > 0) {
            $errorMesagesCreate[] = "Benutzername ist chon vergeben";
            $_username = "";
        }
    } else {
        $errorMesagesCreate[] = "Benutzername ist leer oder zu lang";
    }

    // passwort überprüfen (claude)
    if (empty($_POST["password1"])) {
        $errorMesagesCreate[] = 'Passwort darf nicht leer sein';
    } elseif (strlen($_POST["password1"]) < 8) {
        $errorMesagesCreate[] = 'Passwort muss mindestens 8 Zeichen lang sein';
    } elseif (!preg_match('/[A-Z]/', $_POST["password1"])) {
        $errorMesagesCreate[] = 'Passwort muss mindestens einen Großbuchstaben enthalten';
    } elseif (!preg_match('/[0-9]/', $_POST["password1"])) {
        $errorMesagesCreate[] = 'Passwort muss mindestens eine Zahl enthalten';
    } elseif ($_POST["password1"] !== $_POST["password2"]) {
        $errorMesagesCreate[] = 'Passwörter stimmen nicht überein';
    }

    
    if (count($errorMesagesCreate) == 0) {
        # create password hash from original password
        # VARCHAR 60 necessary, but officially PHP recommendation: at least 255 character
        $_passwordHash = password_hash($_password, PASSWORD_BCRYPT);

        # Statement for insert the values of the new user
        $insertStatement = "INSERT INTO user (username, email, password, created_at)
                            VALUES ('$_username', '$_email', '$_passwordHash', NOW());";

        # user hinzufügen
        $conn->query($insertStatement);

        # neu erstellten user aus db holen
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? LIMIT 1");
        $stmt->bind_param("s", $_username);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        # session speichern
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;

        # auf die index seit umleite
        header("Location: ../index.php");
    } else {
        // holder speichern
        $emailHolder = $_email;
        $usernameHolder = $_username;
    }
}

