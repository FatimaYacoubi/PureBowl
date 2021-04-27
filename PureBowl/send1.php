 <?php 
    require_once 'mail1.php'; //fichier lekhor
    $mail->setFrom('purebowlcontact@gmail.com', 'Pure Bowl'); //the sender
    $mail->addAddress('mohamedaziz.cherif@esprit.tn'); //reciver
    $mail->Subject = 'Thank you for submitting your reclamation!'; //subject
    $mail->Body    = 'We are sorry that you had this bad experience but a request detailing what you found wrong is sent to our team t review it ! thank you for your feedback and for helping us better Pure Bowl!'; //el msg bidou
    $mail->send();
    header('Location:affichercommande.php');
    ?>
  




