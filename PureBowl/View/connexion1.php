<?php
    include_once "../Model/post.php";
    include_once "../Controller/postC.php";

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new postC();
    if (
        isset($_POST["description"]) && 
        isset($_POST["date"]) &&
        isset($_POST["titre"])&&
        isset($_POST["image"])
    ) {
        if (
            !empty($_POST["description"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["titre"])&& 
            !empty($_POST["image"]) 
        ) {
            $user = new post(
                $_POST['description'],
                $_POST['date'],
                $_POST['titre'], 
                $_POST['image'], 
                $etat=1
            );
            $userC->ajouterpost($user);
            header('Location:afficherpost.php');
        }
        else
            $error = "Missing information";
    }

    
?>
