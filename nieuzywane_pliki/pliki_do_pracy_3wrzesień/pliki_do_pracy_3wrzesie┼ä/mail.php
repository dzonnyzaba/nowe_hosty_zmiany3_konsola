<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";
		$to = 'antoni.rudolfo@onet.eu';
		$subject = "meile ido";
		$from = 'jpalubski@wp.pl';

// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Send
mail($to, $subject, $message, 'From: '.$from);
?>
