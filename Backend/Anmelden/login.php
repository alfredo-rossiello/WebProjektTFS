<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
</body>
</html>

<?php
    // überprüfung von eingegebenen daten
    require_once 'DB.php';

    $username = $_POST["email"];
    $password = $_POST["password"];


    if (isset($username) && isset($password)) {
        
        $conn = mysqli_connect("localhost", "root", "", "tfprojekt");
        mysqli_set_charset($conn, "utf8");

        $select = select($conn, $username);

        // überprüfung ob es den username in der DB gibt
        if ($select[0] != null) {

            // überpüfung ob das password übereinstimmt
            if (password_verify($password, $select[1])) {
                echo "password stimmt überein!";

                // rechte vergeben: wenn lehrer dann auch eintragen können wenn schüler nur anschauen
                // am besten über zwei verschiedene Templates oder java script welche mir die links enabled oder disabled
                // also werden beide zu dem Kalender geleitet aber nur Lehrer können über den click in ein Feld Einträge machen 
                // ich schätze ich brauche noch eine Lehrer Schüler tabelle!

                // werte aus dem $select entfernen
                unset($select);
            } else {
                echo "passwort ist falsch!";

                // zurück leiten an login 
            }

        }

    }

?>