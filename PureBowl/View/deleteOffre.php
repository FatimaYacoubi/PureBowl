<?PHP
	include "../Controller/OffreC.php";

	$OffreC=new offreC();
	
	if (isset($_POST["id_offre"])){
		$OffreC->supprimerOffre($_POST["id_offre"]);
		header('Location:showOffre.php');
	}

?>