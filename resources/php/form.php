<?php 
$name = $_post['name'];
$email = $_post['email'];
$message =$_post['message'];

$email_from = 'simple pest control';
$email_subject = 'new message from simple pest';
$email_body = 'Name: $name.\n'.
              'Email: $email.\n'.
              'Message: $message.\n';

$to = "christopher.couret@aol.com";
$headers = "From: $email_form \r\n";
$headers = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header('location: index5.html');
?>