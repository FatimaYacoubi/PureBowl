<?PHP
	include "../Controller/commandeC.php";

	$commandeC=new commandeC();
	
	if (isset($_POST["id"])){
		$commandeC->supprimercommande($_POST["id"]);
		
	}
header('Location:affichercommande.php');
?>