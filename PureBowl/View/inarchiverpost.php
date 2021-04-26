<?PHP
    include "../Controller/postC.php";

    $postC=new postC();
    
    if (isset($_POST["id"])){
        $postC->unarchiverpost($_POST["id"]);
        header('Location:afficherpost.php');
    }

?>