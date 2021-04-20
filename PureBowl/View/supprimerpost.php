<?PHP
	include "../Controller/postC.php";

	$postC=new postC();
	
	if (isset($_POST["id"])){
		$postC->supprimerpost($_POST["id"]);
		header('Location:afficherpost.php');
	}

?>