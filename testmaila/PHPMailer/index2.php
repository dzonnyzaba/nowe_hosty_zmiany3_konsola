<?php
require_once('phpmailer/PHPMailerAutoload.php'); # patch where is PHPMailer / ścieżka do PHPMailera

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

//$mail->IsSMTP();
$mail->Host = 'smtp.wp.pl'; # Gmail SMTP host
$mail->Port = 587; # Gmail SMTP port
$mail->SMTPAuth = true; # Enable SMTP authentication / Autoryzacja SMTP
$mail->Username = "jpalubski@wp.pl"; # Gmail username (e-mail) / Nazwa użytkownika
$mail->Password = "tataswinka"; # Gmail password / Hasło użytkownika
$mail->SMTPSecure = 'ssl';

#$mail->From = ''; # REM: Gmail put Your e-mail here
$mail->FromName = 'You name'; # Sender name
$mail->AddAddress('chrumchrum00@gmail.com'); # # Recipient (e-mail address + name) / Odbiorca (adres e-mail i nazwa)

$mail->IsHTML(true); # Email @ HTML

$mail->Subject = 'E-mail subject / Tytuł wiadomości';
$mail->Body = 'HTML e-mail body / Treść wiadomości w HTML';
$mail->AltBody = 'Plaint text e-mail body / Treść wiadomości jako tekst';

if(!$mail->Send()) {
echo 'Some error... / Jakiś błąd...';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

echo 'Message has been sent (OK) / Wiadomość wysłana (OK)';

?>