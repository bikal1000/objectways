<?php
	if(isset($_POST['submit'])){
		
	$to = "mifa@mail-space.net";
	$subject = "Contact Form Mail";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	
	$main = 'Hello Objectway, <br/> You have received mail from contact form. <br/><br/> <strong> Full Name: </strong>' .$fname.' '.$lname.'<br/> <strong> Email: </strong>' .$email.'<br/><stron>Phone Number</strong>'.$phone.'<br/><strong>Message</strong>'.$message.'<br/><br/> Thank you.';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <info@splendourgroup.org>' . "\r\n";

	mail($to, $subject, $main, $headers);
}
?>