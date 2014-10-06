<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST" && isset ( $_POST )) {
	
	$name = '';
	$mail_msg = '';
	if (isset ( $_POST ['name'] )) {
		$name = $_POST ['name'];
		$mail_msg = '<h4>Name:</h4> ' . $name . "<br><br>";
	}
	
	if (isset ( $_POST ['email'] )) {
		$email = $_POST ['email'];
		$mail_msg .= '<h4>Email:<h4> ' . $email . "<br><br>";
	}
	
	if (isset ( $_POST ['mob-num'] )) {
		$mob = $_POST ['mob-num'];
		$mail_msg .= '<h4>Mobile Number:</h4> ' . $mob . "<br><br>";
	}
	
	if (isset ( $_POST ['services'] )) {
		$services = $_POST ['services'];
		if ($services != 'select') {
			$mail_msg .= '<h4>Service Selected:</h4> ' . $services . "<br><br>";
		}
	}
	
	if (isset ( $_POST ['message'] )) {
		$msg = $_POST ['message'];
		$msg = trim ( $msg );
		$msg = stripslashes ( $msg );
		$msg = htmlspecialchars ( $msg );
		$mail_msg .= '<h4>Query:</h4> ' . $msg . "<br><br>";
	}
	
	$to = "duvdeeru@gmail.com";
	$sub = 'Query from ' . $name;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail ( $to, $sub, $mail_msg, $headers );
	
	header ( "Location: contact.php?msg=success" );
}
?>
