<?php 

session_start();

if (!(isset($_SESSION['emails']))) {
    $_SESSION['emails'] = [];
}
 
    $_SESSION['message'] = [];

    $message = $_SESSION['message'];


$emails = $_SESSION['emails'];

if (isset($_POST['submit'])) {
    
if (!in_array($_POST['email'], $emails)) {
    array_push($emails, $_POST['email']);
    array_push($message, "Your email adress has been added.");
}

else {
    array_push($message, "This email adress is already registrered.");
}

$_SESSION['message'] = $message;

}

$_SESSION['emails'] = $emails;

print_r($_SESSION['emails']);