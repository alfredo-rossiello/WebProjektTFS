<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="anlegenVonEmail.php" method="post">
        <h1>Anlegen von neuem User</h1>

        <label for="Benutzername">Benutzername:</label>
        <input type="email" name="email" placeholder="email">

        <!-- Klassen sollen auch Angelegt werden können -->
        <input type="button" value="Anlegen">
    </form>
    
</body>
</html>

<?php

// klassen werden aus Email extrahiert it_24ar zB 
// wenn keine zahl in der Email angegeben wurde ist es ein Lehrer
// neu Lehrer, Schüler und Klassen werden hier angelegt
// vielleicht zurück leiten auf die Webseite oder
// weiter leiten auf anderes Template damit daten verarbeitet werden können

?>