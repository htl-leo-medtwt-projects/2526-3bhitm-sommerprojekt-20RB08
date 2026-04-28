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

    <style>
        
    </style>
</head>
<body>
    <!--form-div-->
    <div id="view">
        <!--Dark-->
        <div id="dark">
            <!--Übershcrig-->
            <h4>Anmelden</h4>

            <!--create acc-->
            <form action="">
                <!--Email-->
                <div class="field">
                    <div class="field-label">
                        <i class="fa-regular fa-user"></i>
                        Benutzername
                    </div>
                    <input class="field-input" type="text" name="username" placeholder="YungHurn" />
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
                <input type="submit" value="Anmelden" class="button">
            </form>
        </div>

        <!--Light-->
        <div id="light">
            <!--Übershcrig-->
            <h4>Konto Erstellen</h4>

            <!--create acc-->
            <form action="">
                <!--Email-->
                <div class="field">
                    <div class="field-label">
                        <i class="fa-solid fa-at"></i>
                        email Adresse
                    </div>
                    <input class="field-input" type="email" name="email" placeholder="mustermann@gmail.com" />
                </div>

                <!--Email-->
                <div class="field">
                    <div class="field-label">
                        <i class="fa-regular fa-user"></i>
                        Benutzername
                    </div>
                    <input class="field-input" type="text" name="username" placeholder="YungHurn" />
                </div>

                <!--passwort-->
                <div class="field">
                    <div class="field-label">
                        <i class="fa-solid fa-key"></i>
                        Passwort
                    </div>
                    <input class="field-input" type="password" name="password" />
                </div>

                <!--passwort-repead-->
                <div class="field">
                    <div class="field-label">
                        <i class="fa-solid fa-key"></i>
                        Passwort wiederholen
                    </div>
                    <input class="field-input" type="password-repeat" name="password" />
                </div>

                <!--submit-->
                <input type="submit" value="Erstellen" class="button">
            </form>
        </div>
    </div>
</body>
</html>