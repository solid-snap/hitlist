<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbname = "hitlist";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername; 
        dbname=$dbname", $username, $password);

     echo "Connectie gelukt! </br>";
} catch (PDOException $e) {
    echo "Connectie mislukt:" . $e->getMessage();
}



