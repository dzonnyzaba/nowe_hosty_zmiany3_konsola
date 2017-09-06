<?php
// the message
$email = 'chrumchrum00@gmail.com';
$msg = "First line of text\nSecond line of text";
/*$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n".
	'X-Mailer: PHP/'.phpversion();*/
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail($email,"My subject",$msg)){
	echo 'wysłano';
}else{
	echo 'nie wysłano niestety';
}
?> 