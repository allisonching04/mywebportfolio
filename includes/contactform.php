<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['mail'];
	$msg = $_POST['message'];
	$to = "contactme@chingchinglee.com";
	$email_subject = "From submission";
	$message = "Name: ".$name."\n"."email: ".$visitor_email."\n"."Left the following messages: "."\n\n".$msg;
	$headers = "From: ".$visitor_email;
	if(mail($to, $email_subject, $message, $headers)) {
		//echo "<h1>Thank You ! "." ".$name." I will contact you shortly</h1>";
		header("location: ../index.php");    
		
	}else{
		// echo "Opps! Something went wrong!";
		header("location: ../index.php"); 
	}
    
?>