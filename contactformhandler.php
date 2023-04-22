<?php
	$name =$_POST['name'];
	$visitor_email=$POST['email'];
	$message=$_POST['message'];
	$email_from ='swaevee@gmail.com';
	$email_subject="New form submission"
	$email_body =
		"User Name: $name.\n"
		"User Email: $visitor_email.\n"
		"User Name: $message.\n";
	$to="victorsawe2@gmail.com";
	$headers="From: $email_from \r\n";
	$headers .="Reply-To: $visitor_email \r\n";
	mail($to, $email_subject, $email_body,$headers);
	header("Location: contact.html");
?>