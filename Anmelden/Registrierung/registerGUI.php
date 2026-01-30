<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Registrieren</title>
</head>
<body>
    <form action="register.php" method="post">
        <div class="container">
            <h1>Registrierung</h1>
            <form id="registerForm">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    
                    <!-- das GET, lieber mit einer Session, gefällt mir noch nicht so ganz -->
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_GET["email"] ?? "") ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" id="password" name="password">
                </div>
                
                <button type="submit">Registrieren</button>
            </form>
            
            <p class="link-text">
                Bereits registriert? <a href="loginGUI.php">Hier anmelden</a>
            </p>
        </div>
    </form>
</body>
</html>