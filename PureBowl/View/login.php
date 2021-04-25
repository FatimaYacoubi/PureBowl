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
                header('Location:ProfilUser.php');
            }else
                { header('location:../login.html');}
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
</head>
<body>

<form action="login.php" method="POST" align="center" >
    <div class="row">
        <div class="col-md-7 pr-1">
            <div class="form-group">
                <label>E-mail</label>
                <br>
                <input type="text" name="email" class="form-control" placeholder="e-mail">
            </div>
        </div>

        <div class="col-md-7 pr-1">
            <div class="form-group">
                <label>Mot de passe</label>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            </div>
        </div>

    </div>
    <input type="submit" value="se connecter" name = "se connecter">
    <input type="reset" value="Annuler" >
    <br>
    Vous n'avez pas un compte ?
    <a href="inscription.php">S'inscrire</a>


</form>
<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>