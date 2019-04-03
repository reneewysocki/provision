<?php
if(isset( $_POST['company']))
$company = $_POST['company'];
if(isset( $_POST['priority']))
$priority = $_POST['priority'];
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['lname']))
$lname = $_POST['lname'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "reneew311@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $company, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>