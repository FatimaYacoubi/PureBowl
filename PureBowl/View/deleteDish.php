<?PHP
	include "../Controller/dishC.php";

	$dishC=new dishC();
	
	if (isset($_POST["id"])){
		$dishC->deleteDish($_POST["id"]);
		header('Location:displayProduct.php');
	}

?>