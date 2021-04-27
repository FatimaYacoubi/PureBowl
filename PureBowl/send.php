 <?php 
    require_once 'mail.php'; //fichier lekhor
    $mail->setFrom('purebowlcontact@gmail.com', 'Pure Bowl'); //the sender
    $mail->addAddress('yacoubi.fatima@esprit.tn'); //reciver
    $mail->Subject = 'Thank you for Using our service!'; //subject
    $mail->Body    = 'this is a message telling you dear user that you are now a member of the Pure Bowl world! thank you for trusting us and be sure that we will deliver to your doortep the freshest ingredients'; //el msg bidou
    $mail->send();
    ?>
  




