<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "prodigygit@yahoo.com";
$subject = "Freelance Message";
$body = "Test Message. \n\n $email \n\n $message";

mail($to,$subject,$body);

echo  "Message Sent!"
 ?>
