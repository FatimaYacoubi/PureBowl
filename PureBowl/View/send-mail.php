<?php
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  // Load Composer's autoloader

 //require "C:/xampp/htdocs/PureBowl/PureBowl/View/php-mailer-master/PHPMailerAutoload";
 // Load Composer's autoloader
require '../vendor2/autoload.php';

 
   $mail = new PHPMailer(true);
 
   
    //Server settings
    //$mail->SMTPDebug = 0;    
    $sender="purebowlcontact@gmail.com"     ;                              // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   =  $sender;                     // Your gmail address
    $mail->Password   = 'Dorsaf2021';                               // Your gmail password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom( $sender, 'Pure Bowl');
    $mail->addAddress($_POST["receiver"]);
 
    $file_name = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
    $mail->addAttachment($file_name);
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];
 
    $mail->send();
    
  header('refresh:0;url=menu.php');
 
?>
