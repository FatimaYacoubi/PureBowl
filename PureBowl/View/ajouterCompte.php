<?php
include_once '../Model/utilisateur.php';
include_once '../Controller/utilisateurC.php';
include_once '../vendor1/autoload.php';

$error = "";
$sid="AC1b3a7febca8e82c798902a2fbb91542a";
$token="b52b4a25a74a225a7f1d4880c1c755a7";
$client=new Twilio\Rest\Client($sid,$token);

$user = null;

$userC = new utilisateurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["password1"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["tel"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["tel"]) &&
        (($_POST["tel"]>=20000000) && ($_POST["tel"]<=99999999))&&
        ($_POST["password"]==$_POST["password1"])

    ) { 
        $_CLIENT['e'] = $_POST["email"];
        $_CLIENT['l'] = $_POST["login"];
        $_CLIENT['t'] = $_POST["tel"];
        $user = new utilisateur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['password'],
            $_POST['adresse'],
            $_POST['tel']



        );

        $userC->ajouterutilisateur($user);
        $num="+216".$_POST['tel'];

        $client->messages->create(
            // Where to send a text message (your cell phone?)
            $num,
            array(
                'from' => "+13852360879",
                'body' => 'Bienvenue dans notre site PureBowl'
            ));
        header('Location:login.php');
    }

    else if (($_POST["password"]!=$_POST["password1"]) && (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999)))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche / le mot de passe doit être le même dans la confirmation";

    else if (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche";
    else if ($_POST["password"]!=$_POST["password1"])
        $error = "le mot de passe doit être le même dans la confirmation";

}


?>