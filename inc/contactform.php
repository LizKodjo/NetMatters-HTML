<?php

session_start();
include_once "dbconnect.php";


// Define variables

$fullname = $company = $email = $telephone = $message = $marketing = $token = "";
$errors = [];
$data = [];

// Function to sanitise data
function sanitiseData($data)
{
    // santitize incoming data
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check token
    if (empty($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        $errors[] = 'Invalid token';
    }

    // check name entry
    if (!empty($_POST["name"])) {
        $fullname = sanitiseData($_POST["name"]);
        if (ctype_alpha(str_replace(" ", "", $fullname)) === false) {
            $errors[] = "Name should have only alphabets and spaces";
        }
    } else {
        $errors[] = "Please enter your name";
    }
    // if company field is filled, make sure data is secure and correct
    if (!empty($_POST["company"])) {
        $company = sanitiseData($_POST["company"]);
        if (!ctype_alpha(str_replace(" ", "", $company))) {
            $errors[] = "Company should have only alphabets and spaces";
        }
    } else {
        $company = "";
    }
    // check email address is not blank and is valid
    if (!empty($_POST["email"])) {
        $email = sanitiseData($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid email.";
        }
    } else {
        $errors[] = "Please enter an email address.";
    }
    // Check phone number is valid 
    if (!empty($_POST["telephone"])) {
        $telephone = sanitiseData($_POST["telephone"]);
        if (!preg_match("/^\+?(?:\d\s?){10,12}$/", $telephone)) {
            $errors[] = "Please enter a valid telephone number.";
        }
    } else {
        $errors[] = "Please enter a telephone number.";
    }
    // Check message is valid
    if (!empty($_POST["message"])) {
        $message = sanitiseData($_POST["message"]);
        // if (!ctype_alpha(str_replace(" ", "", $message))) {
        //     $errors[] = "The message should have only alphabets and spaces please";
        // }
    } else {
        $message = "";
    }
    // Check if marketing is checked or not.  It can be left unchecked
    if (!empty($_POST["marketing_preference"])) {
        $marketing = $_POST["marketing_preference"];
        $marketing = filter_var($marketing, FILTER_VALIDATE_BOOL);
    } else {
        $marketing = "";
    }



    if ($errors) {
        //var_dump($errors);
        // Display all error messages 
        $_SESSION['status'] = 'error';
        $_SESSION['errors'] = $errors;
        header('Location: ../contact-us.php?result=error#contact-form');
        die();
    } else {
        //echo "All fields are correct";
        $data = [
            "name" => $fullname,
            "company" => $company,
            "email" => $email,
            "telephone" => $telephone,
            "message" => $message,
            "marketing_preference" => $marketing
        ];
        // Display the success message after form has been completed correctly.
        $_SESSION["status"] = 'success';
        $_SESSION["data"] = $data;
        header("Location: ../contact-us.php?result=success#contact-form");
        //die();
    }

    try {
        // Use prepared statement to prevent sql injection attacks
        $stmt = $db->prepare("INSERT INTO netmatters_form (fullname, company, email, telephone, message, marketing) 
            VALUES (:fullname, :company, :email, :telephone, :message, :marketing)");
        //  bind to save information securely in table
        $stmt->bindParam(":fullname", $fullname, PDO::PARAM_STR);
        $stmt->bindParam(":company", $company, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":telephone", $telephone, PDO::PARAM_STR);
        $stmt->bindParam(":message", $message, PDO::PARAM_STR);
        $stmt->bindParam(":marketing", $marketing, PDO::PARAM_BOOL);

        $stmt->execute();
        header("Location: ../contact-us.php?result=success#contact-form");
        die();
    } catch (PDOException $e) {
        // Display error message if information was not saved.
        return "error saving data" . $e->getMessage();
    }

} else {

    header("Location: ../index.php");
    exit;
}

