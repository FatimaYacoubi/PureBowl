<?PHP
	include "../Controller/carteFC.php";

	$CarteC=new carteC();
	
	if (isset($_POST["idC"])){
		$CarteC->deletecarte($_POST["idC"]);
		header('Location:displaycarte.php');
	}

?>