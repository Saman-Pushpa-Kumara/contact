<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'spk2200@gmail.com';
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

$headers = 'From: ' . $email . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);

echo 'Thank you for contacting us! We will respond to your message shortly.';
?>
