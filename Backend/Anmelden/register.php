<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
</head>
<body>
    <h1>Erfolgreich weiter geleitet</h1>
</body>
</html>

<?php
// sessions müssen noch eingefügt werden
// kNd,2U6gYfWt6Y" eine eingeloggte person

require_once 'registerFunktions.php';
require_once 'DB.php';

$username = $_POST["email"];
$password = $_POST["password"];

$validEmail = false;
$validPassword = false;
$emailVerified = false;


if (isset($username)) {
    // ueberprueft ob emailformat passt 
    if (validateEmail($username)) {

        // schaut ob die domain stimmt
        if (validateEmailDomain($username)) {
            $validEmail = true;
        }
    }
}


if (isset($password)) {
    // ueberpruefung ob passwort den Anforderungen genügt
    if (validatePassword($password)) {
        $validPassword = true;        
    }

}


if ($validEmail && $validPassword) {
    
    // verbindung zur db in der dann die daten gespeichert werden
    $conn = mysqli_connect("localhost", "root", "", "tfprojekt");
    mysqli_set_charset($conn, "utf8");

    if ($conn != null) {
            
        // tablle erstellen
        $sql2 = "CREATE TABLE IF NOT EXISTS user (
                username VARCHAR(255) NOT NULL UNIQUE PRIMARY KEY,
                password VARCHAR(255) NOT NULL
            )";
             
        mysqli_query($conn, $sql2);

        // daten in die db einfügen
        // PASSWORD_BCRYPT saltet automatisch
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $select = select($conn, $username);

        if ($select == null) {
            insert($conn, $username, $hash);
            echo "eingetragen";
        } else  {
            // werte entfernen
            unset($select);
        }

        mysqli_close($conn);
    }

} else if ($validEmail && !$validPassword) {
    // sessions verwenden
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php?email=$email");
} else {
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php");
}
?>