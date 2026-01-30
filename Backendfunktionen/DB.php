<?php
// einfügen von daten
function insert($conn, $username, $password) {
    $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// suchen nach username oder gehashtem passwort
function select ($conn, $data) {
    $sql = "SELECT username, password FROM user WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $data);
    mysqli_stmt_execute($stmt);
    
    // werte aus Datenbank an die variable input binden
    mysqli_stmt_bind_result($stmt, $user, $pwd);

    // wert holen
    mysqli_stmt_fetch($stmt);
    
    // statement schließen (Ressourcen freigeben)
    mysqli_stmt_close($stmt); 
    
    $input[0] = $user;

    if ($pwd != null) {
        $input[1] = $pwd;
    } else {
        $input[1] = "";
    }

    // Wert zurueckgeben
    return $input;
}

// löschen anhand von username
function delete() {

}

// funktion zum verändern von daten z.B dem Passwort 
// oder wenn sich die email geändert hat
function update() {

}

?>