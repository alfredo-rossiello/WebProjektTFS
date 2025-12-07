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

// schaue das 

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$validEmail = false;
$validPassword = false;
$validBN = false;

if (isset($email)) {

    // ueberprueft ob emailformat passt 
    if (validateEmail($mail)) {

        // schaut ob die domain stimmt
        if (sortForEmailDomain($email)) {
            $validEmail = true;
        }

    }

}


// funktion die die email auf gueltigkeit prueft
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// funktion welche die domain der email überprueft
function sortForEmailDomain($email) {
    $arr[] = explode("@", $email);

    // überprüft ob email domain passt
    $bap = preg_match_all("/^bap/i", $arr[1]);
    $passau = preg_match_all("/passau/i", $arr[1]);
    $microsoft = preg_match_all("/microsoft/i", $arr[1]);
    $com = preg_match_all("/com$/i", $arr[1]);

    // überprüfung ob diese elmente in der email vorhanden sind
    if (($bap == 1 || $passau == 1 || $microsoft == 1) && $com != 0) {
        return true;
    } else {
        return false;
    }
}

?>