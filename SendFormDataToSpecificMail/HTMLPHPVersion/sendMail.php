<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$occupation = $_POST['occupation'];
	
	$to = "kevin_mogi@yahoo.co.id";
	$subject = "Visitor";
	$headers = "From: Kevin Mogi" ;
	$message = "Name : ".$name.
			   "\nEmail : ".$email.
			   "\nPhone : ".$phone. 
			   "\nOccupation : ".$occupation;

	mail($to, $subject, $message, $headers);
	
	header('Location: thankYou.html');
	exit();
?>