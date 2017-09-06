<?php
// The message
$to = "jpalubski@wp.pl";
$subject = "to będzie wiadomość do wysłania";
$message = "a to właśnie jest ta wiadomość";
$header = "From: jpalubski@wp.pl \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
/*
$message = "Line 1\r\nLine 2\r\nLine 3";
		$to = 'jpalubski@wp.pl';
		$to1 = 'antoni.rudolfo@onet.eu';
		$subject = "meile idą";
		$from = 'jpalubski@wp.pl';
*/
// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Send
$wynik = mail($to, $subject, $message, $header);
if($wynik){
	echo "wiadomość wysłano";
}else{
	echo "nie wysłano wiadomości";
}
?>
