<?PHP
    include "../Controller/dishC.php";

    $dishC=new dishC();
    
    if (isset($_POST["id"])){
        $dishC->inarchiverDish($_POST["id"]);
        header('Location:afficherDisharchive.php');
    }

?>