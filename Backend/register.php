<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>
<body>

</body>
</html>

<?php

// sessions sind besser als get parameter 

$email = $_POST["email"];
$password = $_POST["password"];

$validEmail = false;
$validPassword = false;
$emailVerified = false;

if (isset($email)) {
    // ueberprueft ob emailformat passt 
    if (validateEmail($email)) {

        // schaut ob die domain stimmt
        if (validateEmailDomain($email)) {
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


    // keine header verwenden sondern sessions
} else if ($validEmail && !$validPassword) {
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php?email=$email");
} else {
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php");
}


// funktion die die email auf gueltigkeit prueft
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


// funktion welche die domain der email überprueft
function validateEmailDomain($email) {
    $arr = explode("@", $email, 2);
    $domain = explode(".", $arr[1]);


    // überprüfung ob diese elmente in der email vorhanden sind
    if (count($domain) == 2) {
        if ($domain[0] == "bapfit" && $domain[1] == "lan") {
            return true;
        }
    } else if (count($domain) == 3) {
        if ($domain[0] == "bappassau" && $domain[1] == "onmicrosoft" && $domain[2] == "com") {
            return true;
        } 
    }

    return false;
}


function validatePassword($password) {
    // mindestlaenge 8 zeichen
    if (strlen($password) < 8) {
        return false;
    }

    // mindestens ein grosser buchstabe
    if (!preg_match("/[A-Z]/", $password)) {
        return false;
    }

    // mindestens eine zahl
    if (!preg_match("/[0-9]/", $password)) {
        return false;
    }

    return true;
}

// verbindung zur datenbank 
/*function conn($sql) {
    // verbindung zur db erstellen
    $con = mysqli_connect("localhost", "root", "", "tfprojekt");
    mysqli_set_charset($con, "utf-8");

    // insert, delete, update gibt true zurück, select gibt result set zurück
    return mysqli_query($con, $sql);
}*/
?>