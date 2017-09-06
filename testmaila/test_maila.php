<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";
		$to = 'jpalubski@wp.pl';
		$to1 = 'antoni.rudolfo@onet.eu';
		$subject = "meile idą";
		$from = 'jpalubski@wp.pl';

// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Send
$wynik = mail($to, $subject, $message, 'From: '.$from);
if($wynik){
	echo "wiadomość wysłano";
}else{
	echo "nie wysłano wiadomości";
}
?>
