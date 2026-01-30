<?php
// session starten für Rechte verwaltung

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="login.php" method="post">
        <div class="container">
            <h1>Anmelden</h1>
            <form action="../../Backend/login.php" method="post">
                <div class="form-group">
                    <label for="email">E-Mail oder Benutzername</label>
                    <input type="text" id="email" name="email">
                </div>
                
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" id="password" name="password">
                </div>
                
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Angemeldet bleiben 
                    </label>
                    <a href="#">Passwort vergessen?</a>
                </div>
                
                <button type="submit">Anmelden</button>
            </form>
            
            <!--<p class="link-text">
                Noch kein Konto? <a href="registerGUI.php">Jetzt registrieren</a>
            </p>-->
        </div>
    </form>
</body>
</html>