<?php

$date = $_POST['date'];
$login = $_POST['login'];

$date = htmlspecialchars($date);
$login = htmlspecialchars($login);


$date = urldecode($date);
$login = urldecode($login);


$date = trim($date);
$date = trim($login);



if (mail("throstiks999@gmail.com",
         "Новое письмо с сайта",
         "Логин: ".$login."\n".
		 "From: no-rep@domain.ru \r\n")
		 
		 )




		 {
			 echo('Операция выполнена');
		 }
		 else {
			 echo('Есть ошибки!');
		 }

?>