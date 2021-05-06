<?php
    include_once "../Model/reclamation.php";
    include_once "../Controller/reclamationC.php";

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new reclamationC();
    if (
        isset($_POST["description"]) && 
        isset($_POST["date"]) &&
        isset($_POST["nomClient"]) && 
        isset($_POST["emailClient"]) && 
        isset($_POST["phoneClient"])
    ) {
        if (
            !empty($_POST["description"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["nomClient"]) && 
            !empty($_POST["emailClient"]) && 
            !empty($_POST["phoneClient"])
        ) {
            $user = new reclamation(
                $_POST['description'],
                $_POST['date'], 
                $_POST['nomClient'],
                $_POST['emailClient'],
                $_POST['phoneClient'],
                $etat=1
            );
            $user1=$_POST["IDCommande"];
            $userC->ajouterreclamation($user);
            header('Location:afficherreclamation1.php');
        }
        else
            $error = "Missing information";
    }

    
?>
