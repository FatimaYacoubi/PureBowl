<?PHP
	include "../Controller/reclamationC.php";

	$reclamationC=new reclamationC();
	
	if (isset($_POST["id"])){
		$reclamationC->supprimerreclamation($_POST["id"]);
		header('Location:afficherreclamation.php');
	}

?>