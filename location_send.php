<!-- A développer --> 

<?php

$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$mail = htmlspecialchars($_POST['mail']);
$phone = htmlspecialchars($_POST['phone']);
$msg = htmlspecialchars($_POST['message']);
// Destinataire
$to = 'dylanbourbottesimplon@gmail.com';

// Sujet
$subject = "Location - Pieces $name $surname";
// Message
$message = "<h1>Bonjour</h1><p>Email: $mail<br>Numéro de téléphone: $phone<br>Message : $msg</p>";


//Headers.

$headers = "From: $name $surname <sender@testmail.com>\r\n";
$headers .= "Reply-To: reply@testmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);
header('Location: index.php');
?>

