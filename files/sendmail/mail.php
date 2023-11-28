<?php

/* Здесь проверяется существование переменных */
// if (isset($_POST['course'])) {
// 	$company = $_POST['course'];
// }
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['phone'])) {
	$message = $_POST['phone'];
}




/* Сюда впишите свою эл. почту */
$address = "v.rudenko106@gmail.com";

$mes = "
<html>
<head>
	<title>Message</title>
</head>
<body> 
	<p>ФИО: <strong>$name</strong></p>
	<p>Email: <strong>$email</strong></p>
	<p>Телефон: <strong>$phone</strong></p>
</body>
</html>";


/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub = "$course"; //сабж
$email = 'Заявка на курс'; // от кого

$send = mail($address, $sub, $mes, "Content-type:text/html; charset = utf-8\r\nFrom:$email");
