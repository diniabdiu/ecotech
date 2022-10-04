<?php
// Check for empty fields
if(empty($_POST['name'])  		    ||
empty($_POST['pozita'])  		    ||
empty($_POST['kompania'])  		    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$pozita = $_POST['pozita'];
$kompania = $_POST['kompania'];
$message = $_POST['message'];


// Create the email and send the message
$to = 'diniabdiu@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Nje vlersim per Ecotech:  $name";
$email_body = "Keni nje vlersim nga faqja juaj www.ecotech-ks.com:\n\n
Name: $name\n\n
Email: $email_address\n\n
Kompania: $kompania\n\n
Pozita: $pozita\n\n
Vlersimi:\n$message";
$headers = "From: diniabdiu@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>