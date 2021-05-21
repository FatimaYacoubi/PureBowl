<?php
session_start();
include_once '../Model/utilisateur.php';
include_once '../Controller/utilisateurc.php';
$message="";
$user1C = new utilisateurC();

$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
        $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect') {
            $user = $user1C->recupererrole($_POST['email']);
            if ($user['role'] == 'client') {
                header('Location:../view/ProfilUser.php'); //client
            }else
                { header('Location:../view/index1.php');} //admin
        }
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link href="../css/progress-wizard.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
  <!-- Site CSS -->

<style type="text/css">
    #aDiv{width: 300px; height: 300px; margin: 0 auto;}
    body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9E8MLs_rO4scn2FKCw_CTgT3AGITGfBAAm5Nt_uWOHPznHX0r13hnQ2uIhRXt9ngEpw&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style2.css">    

    <link rel="stylesheet" href="../css/style.css">    
  <!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
  <link rel="stylesheet" href="../css/classic.date.css">    
  <link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
  
</head>
<body>
<br>
<br>
<br>

<div id="aDiv">
    <div class="container" align="center">
                    <img src="../images/logo.png"  />
<br>
<br>
<form action="login.php" method="POST" >
    <div class="container" align="center"> 
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                <label>E-mail</label>
                <br>
                <input type="text" align="center" name="email" class="form-control" placeholder="e-mail">
            </div>
        </div>

                   <div class="col-md-12">
            <div class="form-group">
                <label>Password</label>
                <br>
                <input align="center" type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>

    </div> 
    <input class="btn-222" type="submit" value="login" name = "se connecter">
    <input class="btn-222" type="reset" value="Cancel" >
    <br>
    New? Sign up - it's FREE!
    <a href="inscription.php">Sign up</a>
    <script>
  alert('<?php
// Il est bien connecté
echo 'You must be connected  '
?>');
</script>
    
   </div>  </div>

</form>
<!-- jQuery -->
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.superslides.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/baguetteBox.min.js"></script>
    <script src="../js/picker.js"></script>
    <script src="../js/picker.date.js"></script>
    <script src="../js/picker.time.js"></script>
    <script src="../js/legacy.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>


