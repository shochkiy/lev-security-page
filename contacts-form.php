<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tema = htmlspecialchars($_POST["tema"]);
$message = htmlspecialchars($_POST["message"]);
 
/* Ваш адрес и тема сообщения */
$address = "dmitriy.sotskiy@gmail.com";
$sub = "Сообщение с сайта ХХХ";
 
/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";
 
 
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 30; URL=http://localhost/shochkiy.github.io/contacts.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX</body>';}
else {
 header('Refresh: 30; URL=http://localhost/shochkiy.github.io/contacts.html');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
?>