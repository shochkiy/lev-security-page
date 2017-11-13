<?php 
 
$sendto   = "dmitriy.sotskiy@gmail.com"; // почта, на которую будет приходить письмо
$username = htmlspecialchars($_POST['name']);   // сохраняем в переменную данные полученные из поля c именем
$email = htmlspecialchars($_POST['email']); // сохраняем в переменную данные полученные из поля c телефонным номером
$tema = htmlspecialchars($_POST['tema']); // сохраняем в переменную данные полученные из поля c адресом электронной почты
$message = htmlspecialchars($_POST['message']);
 
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=windows-1251 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Тема:</strong> ".$tema."</p>\r\n";
$msg .= "<p><strong>Текст повідомлення:</strong> ".$message."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<center>Відправлено</center>";
} else {
    echo "<center>Не відправлено</center>";
}
?>