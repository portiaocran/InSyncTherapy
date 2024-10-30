<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.gfg.com;';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'portiaocran3@gmail.com';				 
	$mail->Password = 'Aitrop_31';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('portiaocran3@gmail.com', 'Portia');		 
	$mail->addAddress('priscilla.ocran@hotmail.com');
	$mail->addAddress('portiaocran3@gmail.com', 'Portia');
	
	$mail->isHTML(true);								 
	$mail->Subject = 'TEST';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
