<?php
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
    mysqli_set_charset($con, "utf8");

    // datenbank erstellen
    $sql1 = "CREATE DATABASE IF NOT EXISTS tfprojekt";
        
    // tablle erstellen
    $sql2 = "CREATE TABLE IF NOT EXISTS user (
            username VARCHAR(255) NOT NULL UNIQUE PRIMARY KEY,
            password VARCHAR(255) NOT NULL
        )";

    // daten in die db einfügen
    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    if (select($conn, $username) != null) {
        insert($conn, $username, $hash);
    }

    mysqli_close($conn);
    

} else if ($validEmail && !$validPassword) {
    // sessions verwenden
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php?email=$email");
} else {
    header("Location: http://localhost/AlfredoRossiello/web/Frontend/Anmelden/registerGUI.php");
}
?>