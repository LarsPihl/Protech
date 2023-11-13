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
    array_push($message, "Din mailadress har lagts till.");
}

else {
    array_push($message, "Den angivna mailadressen finns redan registrerad.");
}
$_SESSION['emails'] = $emails;
$_SESSION['message'] = $message;
//header('Location: index.php#form');
}






