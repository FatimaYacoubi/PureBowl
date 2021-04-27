<?PHP
    include "../Controller/reclamationC.php";

    $reclamationC=new reclamationC();
    
    if (isset($_POST["id"])){
        $reclamationC->archiverreclamation($_POST["id"]);
        header('Location:afficherreclamation.php');
    }

?>