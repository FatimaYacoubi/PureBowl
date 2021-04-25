<?PHP
	include "../Controller/recipeC.php";

	$recipeC=new recipeC();
	
	if (isset($_POST["idR"])){
		$recipeC->deleteRecipe($_POST["idR"]);
		header('Location:displayRecipe.php');
	}

?>