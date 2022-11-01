<?php
$address = htmlspecialchars($_POST['email']);
$massage = htmlspecialchars($_POST['message']);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
$mail = new PHPMailer(true);

try {
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'fotius.test@gmail.com';
	$mail->Password   = 'qwhpkdamasuffmht';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port       = 587;
	$mail->setFrom('fotius.test@gmail.com', 'Oleksandr Saveliev');
	$mail->addAddress($address);
	$mail->Subject = 'Message';
	$mail->Body    = $massage;
	$mail->send();
	echo 'Message has been sent';
}
catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
