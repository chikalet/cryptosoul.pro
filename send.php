<?php
session_start();
require 'phpmailer/PHPMailerAutoload.php';


// Переменные, которые отправляет пользователь
$mailAdress   = filter_var(trim($_SESSION    ['mail']),       FILTER_SANITIZE_STRING);
$wallet       = filter_var(trim($_SESSION  ['wallet']),       FILTER_SANITIZE_STRING);
$file         = $_FILES                    ['myfile'];

$mailAdress   = stripslashes    ($choiceKrypto);
$mailAdress   = htmlspecialchars($choiceKrypto);
$wallet       = stripslashes          ($number);
$wallet       = htmlspecialchars      ($number);

echo       $wallet;
echo   $mailAdress;
// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Новое письмо</h2>
<b>Номер кошелька:</b> $wallet<br>
<b>Почта клиента:</b> $mailAdress<br><br>
";

// Настройки PHPMailer
$mail = new PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet     = "UTF-8";
    $mail->SMTPAuth    =    true;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       =           '***'; // SMTP сервера вашей почты
    $mail->Username   =           '***'; // Логин на почте
    $mail->Password   =           '***'; // Пароль на почте
    $mail->SMTPSecure =           'ssl';
    $mail->Port       =             465;
    $mail->setFrom('***', 'Имя отправителя'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('***');  // Ещё один, если нужен

    // Прикрипление файлов к письму
if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }   
}
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body    =  $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";
$_SESSION['message'] = "Файл успешно прикреплен. <a href='index.php'>Главная страница</a>";
header('location: headerSell.php');} 
else {
$_SESSION['message'] = "Ошибка. Файл не прикрпелен, попробуйте еще раз. <a href='index.php'>Главная страница</a>";
header('location: headerSell.php');}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
