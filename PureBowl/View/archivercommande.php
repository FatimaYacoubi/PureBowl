<?PHP
    include "../Controller/commandeC.php";

    $commandeC=new commandeC();
    
    if (isset($_POST["id"])){
        $commandeC->archivercommande($_POST["id"]);
        header('Location:index1.php');
    }

?>