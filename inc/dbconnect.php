<?php
// Connect to database
function connect() {
    include '..\pdoconfig.env';
  

    try {
        // Connect to the database
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        //echo "Connected to $dbname at $host successfully.<br>";
    } catch (PDOException $e) {
        // If error is thrown, catch it and exit
        die ("Could not connect to the database $dbname :" . $e->getMessage());
    }
    return $db;

}



