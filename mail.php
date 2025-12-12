<?php
$to = "Avtar0234@gmail.com"; // jaha aapko mail aayega

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$subject = "New Contact Form Message";

$message = "Name: $name\nPhone: $phone\nEmail: $email";

mail($to, $subject, $message);

echo "Message Sent!";
?>