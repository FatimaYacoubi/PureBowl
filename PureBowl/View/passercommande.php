<?php
    include_once "../Model/commande.php";
    include_once "../Controller/commandeC.php";

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new commandeC();
    if (
        isset($_POST["dish"]) &&
        isset($_POST["meat"]) &&
        isset($_POST["option"]) &&
        isset($_POST["person"]) && 
        isset($_POST["date"]) &&
        isset($_POST["time"])
    ) {
        if (
            !empty($_POST["dish"]) &&
            !empty($_POST["meat"]) &&
            !empty($_POST["option"]) &&
            !empty($_POST["person"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["time"]) 
        ) {
            $user = new commande(
                $_POST['dish'],
                $_POST['meat'],
                $_POST['option'],
                $_POST['person'],
                $_POST['date'],
                $_POST['time']
            );
            $userC->ajoutercommande($user);
            
        }
        else
            $error = "Missing information";
    }
header('Location:affichercommande.php');
    
?>
