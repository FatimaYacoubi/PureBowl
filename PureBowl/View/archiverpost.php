<?PHP
    include "../Controller/postC.php";

    $postC=new postC();
    
    if (isset($_POST["id"])){
        $postC->archiverpost($_POST["id"]);
        header('Location:afficherpost.php');
    }

?>