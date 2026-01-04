<?php
// einfügen von daten
function insert($conn, $username, $password) {
    $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// suchen nach username
function select ($conn, $username) {
    $sql = "SELECT username FROM user WHERE username = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username);
    mysqli_stmt_execute($stmt);
    
    // werte an email binden
    mysqli_stmt_bind_result($stmt, $email);

    // wert holen
    mysqli_stmt_fetch($stmt);
    
    // statement schließen (Ressourcen freigeben)
    mysqli_stmt_close($stmt); 
    
    // Wert zurueckgeben
    return $email;
}

// löschen anhand von username
function delete() {

}

// funktion zum verändern von daten z.B dem Passwort 
// oder wenn sich die email geändert hat
function update() {

}

?>