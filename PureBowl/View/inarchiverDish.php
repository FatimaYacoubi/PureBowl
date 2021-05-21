<?PHP
    include "../Controller/dishC.php";

    $dishC=new dishC();
    
    if (isset($_POST["name"])){
        $dishC->inarchiverDish($_POST["name"]);
        header('Location:afficherDisharchive.php');
    }

?>