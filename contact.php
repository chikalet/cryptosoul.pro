<?php
  session_start();  
  require_once('phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer;
  $mail->CharSet = 'utf-8';

  $name   =                     '***';
  $phone  =               '***';
  $email  =      '***';
  $path   = $_FILES['buyImage']['name'];
  $wallet = $_SESSION        ['wallet'];
  $mailAdress   = $_SESSION    ['mail']; 
  echo       $wallet;
  echo   $mailAdress;
  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.mail.ru';                                               // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = '***'; // Ваш логин от почты с которой будут отправляться письма
  $mail->Password = '***'; // Ваш пароль от почты с которой будут отправляться письма
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

  $mail->setFrom('test-akk2022@mail.ru'); // от кого будет уходить письмо?
  $mail->addAddress('test-akk2022@mail.ru');     // Кому будет уходить письмо 
  //$mail->addAddress('ellen@example.com');               // Name is optional
  //$mail->addReplyTo('info@example.com', 'Information');
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML
 
  if (copy($_FILES['mail_file']['tmp_name'], $path)) $picture = $path;
  echo $path;
  echo $picture;

  $mail->Subject = 'Заявка с тестового сайта';
  $mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email.'<br>Почта этого пользователя: '.$picture;
  $mail->AltBody = '';

  if(!$mail->send()) {
      echo 'Err';
  } else {
      header('location: thank-you.html');
  }
?>
