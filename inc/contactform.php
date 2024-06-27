<?php



// Error messages
$fullnameError = $companyError = $emailError = $telephoneError = $messageError= "";
$fullname = $company = $email = $telephone = $message = "";

function sanitizeData($data) {
    // santitize incoming data

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $fullname = sanitizeData($_POST["name"]);
    // $company = sanitizeData($_POST["company"]);
    // $email = sanitizeData($_POST["email"]);
    // $telephone = sanitizeData($_POST["telephone"]);
    // $message = sanitizeData($_POST["message"]);
    // $marketing = filter_var($_POST["marketing_preference"], FILTER_VALIDATE_BOOLEAN);

    $fullname = $_POST["name"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $marketing = $_POST["marketing_preference"];


   
    if (empty($fullname)) {
        $fullnameError = 'Please enter your name.';
    } else {
        $fullname = sanitizeData($fullname);
        if(!preg_match("/^[A-z ,.'-]+$/", $fullname)) {
            $fullnameError = "Please enter a valid name.";
        }
    }
    if (empty($company)) {
        $company = "";
    } else {
        $company = sanitizeData($_POST["company"]);        
    }
    if (empty($email)) {
        echo $emailError = 'Please enter an email address.'; 
    } else {
        $email = sanitizeData($_POST["email"]);;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $emailError = "Please enter a valid email.";
        }
    }

    if (empty($telephone)) {
        echo $telephoneError = 'Telephone is required.';
    } else {
        $telephone = sanitizeData($_POST["telephone"]);
        if (!preg_match('/^\+?(?:\d\s?){10,12}$/', $telephone)) {
        echo $telephoneError = 'Please enter a valid number.';
        }
        if(strlen($telephone) != 11) {
            echo $telephoneError = "Please enter a valid number.";
        }
    }

    if (empty($message)) {
        $message = "";
    } else {
        $message = sanitizeData($_POST["message"]);
    }



try {   
       
    require_once "dbconnect.php";
    //$db = connect();
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          

        $query = "INSERT INTO contactform (name, company, email, telephone, message, marketing)
        VALUES (?, ?, ?, ?, ?, ?)";
        

        $stmt = $db->prepare($query);
        // $stmt = $db->prepare("INSERT INTO contactform (name. company, email, telephone, message, marketing)
        // VAUES (:name, :company, :email, :telephone, :message, :marketing)");

        $stmt->execute([$fullname, $company, $email, $telephone, $message, $marketing]);
        // $stmt->bind_param(':name', $name);
        // $stmt->bind_param(':company', $company);
        // $stmt->bind_parm(':email', $email);
        // $stmt->bind_param(':telephone', $telephone);
        // $stmt->bind_param(':message', $message);
        // $stmt->bind_param(':marketing', $marketing);
        
        $stmt = null;

        echo "Form successfully submitted";

        header("Location: ../contact-us.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
    $db = null;

} else {   

    header("Location: ../index.php");
}
