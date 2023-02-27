<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info.kjwebsite@gmail.com'

$email_subject = 'Mnenja spletne strani'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";
              
$to = 'spam.website12341@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: miti.html")

?>