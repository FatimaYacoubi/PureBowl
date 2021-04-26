<?php
// On prolonge la session
session_start();
    require_once '../mail.php'; //fichier lekhor

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/style1.css">    

    <link rel="stylesheet" href="css/style.css"> 
    <title>Utilisateur</title>

</head>
<body> 
	 <?php 
    $mail->setFrom('vefmorrison@gmail.com', 'Pure Bowl'); //the sender
    $mail->addAddress('vefmorrison@gmail.com'); //reciver
    $mail->Subject = 'Thank you for Using our service!'; //subject
    $mail->Body    = 'this is a message telling you dear user that you are now a member of the Pure Bowl world! thank you for trusting us and be sure that we will deliver to your doortep the freshest ingredients'; //el msg bidou
    $mail->send();
    ?>
  
<button><a href="login.php">Déconnexion</a></button>
<hr>
<?php
// Il est bien connecté
echo 'Bienvenue cher client, ', $_SESSION['e'];
include ('index.html');
?>
</body>
</html>