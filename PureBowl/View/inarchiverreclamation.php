<?PHP
    include "../Controller/reclamationC.php";

    $reclamationC=new reclamationC();
    
    if (isset($_POST["id"])){
        $reclamationC->inarchiverreclamation($_POST["id"]);
        header('Location:afficherreclamation.php');
    }

?>