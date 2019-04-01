<?php
if(isset( $_POST['fname']))
$name = $_POST['fame'];
if(isset( $_POST['lname']))
$name = $_POST['lname'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['company']))
$company = $_POST['company'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "reneew311@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $company, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>