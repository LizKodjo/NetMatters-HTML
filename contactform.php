<?php
// Error messages
$fullnameError = $companyError = $emailError = $telephoneError = $messageError= "";
$fullname = $company = $email = $telephone = $message = "";

// function incomingData($data) {
//     // santitize incoming data

//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $telephone = filter_var($_POST["telephone"], FILTER_SANITIZE_NUMBER_INT);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $marketing = filter_var($_POST["marketing_preference"], FILTER_VALIDATE_BOOLEAN);

    // $fullname = $_POST["name"];
    // $company = $_POST["company"];
    // $email = $_POST["email"];
    // $telephone = $_POST["telephone"];
    // $message = $_POST["message"];
    // $marketing = $_POST["marketing_preference"];

   
    if (empty($fullname)) {
        $fullnameError = 'Please enter your name.';
    } else {
        $fullname;
        if(!preg_match("/^[A-z ,.'-]+$/g", $fullname)) {
            echo $fullnameError = "Please enter a valid name.";
        }
    }
    if (empty($email)) {
        echo $emailError = 'Please enter an email address.'; 
    } else {
        $email;

        if(!$email) {
            echo $emailError = "Please enter a valid email.";
        }
    }

    if (empty($telephone)) {
        echo $telephoneError = 'Telephone is required.';
    } else {
        $telephone;
        if (!preg_match('/^\+?(?:\d\s?){10,12}$/', $telephone)) {
        echo $telephoneError = 'Please enter a valid number.';
        }
        if(strlen($telephone) != 11) {
            echo $telephoneError = "Please enter a valid number.";
        }
    }
}



    try {   
        require_once("inc/dbconnect.php");
        $db = connect();
          

        $query = "INSERT INTO contactform (name, company, email, telephone, message, marketing)
        VALUES (?, ?, ?, ?, ?, ?);";

        $stmt = $db->prepare($query);

        $stmt->execute([$fullname, $company, $email, $telephone, $message, $marketing]);
        //$db = null;
        //$stmt = null;

        echo "Form successfully submitted";

        header("Location: contact-us.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

// } else {   

//     header("Location: contact-us.php");
// }
