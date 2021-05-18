<?PHP
    include "../Controller/dishC.php";

    $dishC=new dishC();
    
    if (isset($_POST["id"])){
        $dishC->archiverDish($_POST["id"]);
        header('Location:displayProduct.php');
    }

?>