<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mailing/autoload.php';

  $mail = new PHPMailer();
    $mail->isSMTP();              
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'purebowlcontact@gmail.com';
    $mail->Password   ='Dorsaf2021
';
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;
    $mail->isHTML(true);  
?>