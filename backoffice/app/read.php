<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Method: GET");

If($_SERVER['REQUEST_METHOD'] == "GET") {
    include_once '../includes/pdo.php';
    $newd = $bdd->query("SELECT * FROM video");
    $data = $newd->fetch();
    $array = [
        "first" => $data
        
    ];

    echo json_encode($array);

} else {
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}


// Faire une fonction qui récupère tout
// select *
// fetch
// crée un tableau
// fetch -> tableau