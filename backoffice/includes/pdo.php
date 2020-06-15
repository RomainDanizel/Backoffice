<?php
try {
    $bdd = new PDO("mysql:host=127.0.0.1;port=8889;dbname=rack;charset=utf8",
        "root",
        "root",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    );
}
catch (Exception $e) {
    die('Error :' . $e->getMessage());
}



