<?php
#session starte
session_start();
// holder
$emailHolder = "";
$usernameHolder = "";

# create user
require '../phpCode/account/createUser.php';
require '../phpCode/account/login.php';


# print errors
function printErrors($errors) {
    $s = "";

    foreach($errors as $error) {
        $s = "$error <br>";
    }
    
    return $s;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>

    <!--Style-->
    <link rel="stylesheet" href="../mainStyle.css">
    <link rel="stylesheet" href="../styles/account-style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/29a9c6b8a3.js" crossorigin="anonymous"></script>

    <!--JS-->
    <script src="../scripts/account/generateMarque.js" defer></script>
    <script src="../scripts/account/switch.js" defer></script>
    
    <script>
        // claude
        document.addEventListener('DOMContentLoaded', function() {
            <?php echo !empty($_POST['createUser']) ? "switchToSignUp();" : "switchToSignIn();"; ?>
        });
    </script>
</head>
<body>
    <!--form-div-->
    <div id="view">
        <!--Dark-->
        <div id="dark">
            <!--marque-->
            <div class="marque-container" id="marque-dark">
            </div>
            
            <!--wrap-->
            <div class="wrap" id="wrap-dark">
                <!--leave-->
                <a href="../index.php" class="leave"><i class="fa-solid fa-x fa-2xl"></i></a>

                <!--Übershcrig-->
                <h4>Anmelden</h4>

                <!--create acc-->
                <form action="" method="post">
                    <!--Email-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-regular fa-user"></i>
                            Benutzername
                        </div>
                        <input class="field-input" type="text" name="username" placeholder="YungHurn" value="<?php echo $usernameHolder ?>"/>
                    </div>

                    <!--passwort-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-solid fa-key"></i>
                            Passwort
                        </div>
                        <input class="field-input" type="password" name="password" />
                    </div>

                    <!--submit-->
                    <input type="submit" name="login" value="Anmelden" class="button">
                </form>

                <!--error-->
                <div class="error">
                    <?php echo printErrors($errorsLogin) ?>
                </div>

                <!--Switch-->
                <div class="switch">
                    Ich besitze noch KEIN Konto
                    <div class="switch-color" onclick="switchToSignUp()">Konto Erstellen</div>
                </div>
            </div>
        </div>

        <!--Light-->
        <div id="light">
            <!--marque-->
            <div class="marque-container" id="marque-light">
            </div>


            <!--wrap-->
            <div class="wrap" id="wrap-light">
                <!--leave-->
                <a href="../index.php" class="leave"><i class="fa-solid fa-x fa-2xl"></i></a>

                <!--Übershcrig-->
                <h4>Konto Erstellen</h4>

                <!--create acc-->
                <form action="" method="post">
                    <!--Email-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-solid fa-at"></i>
                            email Adresse
                        </div>
                        <input class="field-input" type="email" name="email" placeholder="mustermann@gmail.com" value="<?php echo $emailHolder ?>"/>
                    </div>

                    <!--Email-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-regular fa-user"></i>
                            Benutzername
                        </div>
                        <input class="field-input" type="text" name="username" placeholder="YungHurn" value="<?php echo $usernameHolder ?>"/>
                    </div>

                    <!--passwort-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-solid fa-key"></i>
                            Passwort
                        </div>
                        <input class="field-input" type="password" name="password1" />
                    </div>

                    <!--passwort-repead-->
                    <div class="field">
                        <div class="field-label">
                            <i class="fa-solid fa-key"></i>
                            Passwort wiederholen
                        </div>
                        <input class="field-input" type="password" name="password2" />
                    </div>

                    <!--submit-->
                    <input type="submit" name="createUser" value="Erstellen" class="button">
                </form>

                <!--error-->
                <div class="error">
                    sdfdsjf
                    <?php echo printErrors($errorMesagesCreate) ?>
                </div>

                <!--Switch-->
                <div class="switch">
                    Ich besitze bereits ein Konto
                    <div class="switch-color" onclick="switchToSignIn()">Anmelden</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>