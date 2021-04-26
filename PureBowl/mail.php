<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mailing/autoload.php';

  $mail = new PHPMailer();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();              
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vefmorrison@gmail.com';
    $mail->Password   ='Kamehameha123';
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;
    $mail->isHTML(true);  
?>