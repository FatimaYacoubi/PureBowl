<?php
// On prolonge la session
session_start();
    require_once '../mail.php'; //fichier lekhor
    include_once"../Controller/UtilisateurC.php";


  $UtilisateurC=new UtilisateurC();
  $listeUsers1=$UtilisateurC->afficherutilisateur1($_SESSION['e']);
 
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/profil.css">    

    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style1.css">    
    <link rel="stylesheet" href="../css/style.css"> 
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
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="../images/logo.png" alt="">
              </a>
              <h1>Your Profile</h1>
              <p><?php
// Il est bien connecté
echo $_SESSION['e'];
?></p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
          </ul>
      </div>
  </div>
  <div class="panel-body bio-graph-info">
              <h1>Informations Personnelles</h1>
              <?php 
    foreach($listeUsers1 as $user1){
            ?> 

              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span><?PHP echo $user1['prenom'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span><?PHP echo $user1['nom']; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span> <?PHP echo $_SESSION['e']; ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span><?PHP echo $user1['tel']; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Adresse </span><?PHP echo $user1['adresse']; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Login </span><?PHP echo $user1['login']; ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Password</span><?PHP echo $user1['password']; ?></p>
                  </div> 
                  <a href="updateuser1.php?idClient=<?PHP echo $user1['idClient']; ?>"  > 
                       <button class="btn-222" style="color:black">Edit</button>
                                               <input type="hidden" value=<?PHP echo $user1['idClient']; ?> name="idClient">


                      </a>

<?php 
               } 
          ?>  

              </div>
          </div>
      </div>
     
</div> 


<?php
// Il est bien connecté
?> <button><a class="btn-55" href="../login.php">Déconnexion</a></button>

</body>
</html>