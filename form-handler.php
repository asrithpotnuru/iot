<?php
$name = $_POST['name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from='info@iot.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
			 "User Email:$visitor_email.\n".
			   "Subject:$subject.\n".
			     "User Message:$message.\n";
$to='asrithpotnuru@gmail.com'
$headers="From:$email_from \r \n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>