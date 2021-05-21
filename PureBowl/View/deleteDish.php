<?PHP
	include "../Controller/dishC.php";

	$dishC=new dishC();
	
	if (isset($_POST["name"])){
		$dishC->deleteDish($_POST["name"]);
		header('Location:displayProduct.php');
	}

?>