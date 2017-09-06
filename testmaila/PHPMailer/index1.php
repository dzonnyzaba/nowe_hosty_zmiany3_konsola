<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "chrumchrum00@gmail.com";
$mail->Passowrd = "tataswinka";

$mail->SMTPSecure = "tls";

$mail->Port = 587;

$mail->Subject = "test email";
$mail->Body = "to body jest";

$mail->setFrom = 'chrumchrum00@gmail.com';
$mail->addAddress('chrumchrum00@gmail.com');

if($mail->send()){
	echo "mail sent";
}else{
	echo "coś nie poszło!";
}
?>