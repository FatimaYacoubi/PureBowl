<?PHP
	include "../Controller/UtilisateurC.php";

	$utilisateurC=new utilisateurC();
	
	if (isset($_POST["idClient"])){
		$utilisateurC->supprimerutilisateur($_POST["idClient"]);
		
	}
header('Location:index1.php');
?>