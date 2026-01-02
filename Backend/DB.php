<?php

class DB {

    // datenbank erstellen
    public function db() {

    }

    // tabelle erstellen
    public function table() {

    }

    // ausführen von crud
    public function query($sql) {
        $con = mysqli_connect("localhost", "root", "", "tfprojekt");
        mysqli_set_charset($con, "utf-8");

        // insert, delete, update gibt true zurück, select gibt result set zurück
        return mysqli_query($con, $sql);
    }
}

?>