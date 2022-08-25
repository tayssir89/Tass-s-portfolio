<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = '';
 
$email_subject = 'Nouveau message de : ' . $name;
 
$email_body = "Nom du contact : $name .\n".
                "Adresse Email : $visitor_email .\n".
                "Sujet : $subject .\n".
                "Message : $message .\n";
 
$to = 'ayaritayssir8@gmail.com';
 
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
 
mail($to,$email_subject,$email_body,$headers);
 
header("Location: index.html");
 
?>
