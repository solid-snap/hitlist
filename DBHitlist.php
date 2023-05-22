<?php
// maakt verbinding met database 'hitlist'
// Victoria Hoogeveen

$servername = "localhost";
$dbname = "hitlist";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername; 
        dbname=$dbname", $username, $password);

    // echo "Connectie gelukt! </br>";
} catch (PDOException $e) {
    echo "Connectie mislukt:" . $e->getMessage();
}

