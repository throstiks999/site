<?php
if (!empty($_POST['email'])) {
	$headers = 'From: nil\r\n'.
	           'Reply-To: throstiks999@gmail.com\r\n'.
			   'X-Mailer: PHP/'. phpversion();
	
	$theme = 'новое сообщение';
	
	$letter = 'Данные сообщения:\r\n';
	$letter .='Email: '.$_POST['email'].'\r\n';
 if	(mail('throstiks999@gmail.com', $theme, $letter)) {
	 header('Location:/thankyou.php');
 } else {
	 header('Location:/');
 }
 

}