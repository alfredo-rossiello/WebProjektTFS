<?php

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


// gültigkeit von password prüfen
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

?>