<?php
// Connect to database
// function connect() {
//     $conn = parse_ini_file(__DIR__ . "/../pdoconfig.env");

//     $host = $conn["DB_HOST"];
// $dbname = $conn["DB_NAME"];
// $dbuser = $conn["DB_USERNAME"];
// $password = $conn["DB_PASSWORD"];


//     try {
//         // Connect to the database
//         $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//         //echo "Connected to $dbname at $host successfully.<br>";
//     } catch (PDOException $e) {
//         // If error is thrown, catch it and exit
//         die ("Could not connect to the database $dbname :" . $e->getMessage());
//     }
//return $db;

// }DB_HOST=localhost




$conn = parse_ini_file(__DIR__ . "/../pdoconfig.env");

$host = $conn["DB_HOST"];
$dbname = $conn["DB_NAME"];
$dbuser = $conn["DB_USERNAME"];
$password = $conn["DB_PASSWORD"];


try {
    // Connect to the database

    $db = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $password);
    //echo "Connected to $dbname at $host successfully.<br>";
} catch (PDOException $e) {
    // If error is thrown, catch it and exit
    die("Could not connect to the database $dbname :" . $e->getMessage());

}
