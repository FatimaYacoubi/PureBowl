<?php
// On prolonge la session
session_start();
    require_once 'mail.php'; //fichier lekhor

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:/View/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pure Bowl</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/style1.css">    
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
  <?php 
    $mail->setFrom('purebowlcontact@gmail.com', 'Pure Bowl'); //the sender
    $mail->addAddress( $_SESSION['e']); //reciver
    $mail->Subject = 'Thank you for Using our service!'; //subject
    $mail->Body    = 'this is a message telling you dear user that you are now a member of the Pure Bowl world! thank you for trusting us and be sure that we will deliver to your doortep the freshest ingredients'; //el msg bidou
    $mail->send();
    ?>  
<script>
  alert('<?php
// Il est bien connecté
echo 'Welcome dear Client ', $_SESSION['e'];
?>');
</script>
<?php
// Il est bien connecté
include ('index.html');
?> <button><a class="btn-55" href="login.php">Déconnexion</a></button>

</body>
</html>