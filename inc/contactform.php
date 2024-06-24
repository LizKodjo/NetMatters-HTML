<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST["telephone"], FILTER_SANITIZE_NUMBER_INT);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $marketing = filter_var($_POST["marketing_preference"], FILTER_VALIDATE_BOOLEAN);

    try {   
        require_once "dbconnect.php";
        $db = connect();
          

        $query = "INSERT INTO contactform (name, company, email, telephone, message, marketing)
        VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $db->prepare($query);

        $stmt->execute([$fullname, $company, $email, $telephone, $message, $marketing]);
        $db = null;
        $stmt = null;

        echo "Form successfully submitted";

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {   

    header("Location: ../index.php");
}
