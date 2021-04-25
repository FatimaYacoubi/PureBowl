<?PHP
	include "../config.php";
	require_once '../Model/recipe.php';

	class recipeC {
		
		function addRecipe($recipe){
			$sql="INSERT INTO recipes (duration, steps,id) 
			VALUES (:duration,:steps,:id)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'duration' => $recipe->getDuration(),
					'steps' => $recipe->getSteps(),
					'id' => $recipe->getId()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function displayRecipe(){
			
			$sql="SELECT * FROM recipes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function deleteRecipe($idR){
			$sql="DELETE FROM recipes WHERE idR= :idR";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idR',$idR);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifyRecipe($recipe, $idR){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE recipes SET 
						duration = :duration, 
						steps = :steps,
					
						
					WHERE idR = :idR'
				);
				$query->execute([
					'duration' => $recipe->getDuration(),
					'price' => $recipe->getPrice(),
					
					
					'idR' => $id
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererRecipe($idR){
			$sql="SELECT * from recipes where idR=$idR";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$recipe=$query->fetch();
				return $recipe;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererRecipe1($idR){
			$sql="SELECT * from recipes where idR=$idR";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$recipe = $query->fetch(PDO::FETCH_OBJ);
				return $recipe;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
		

}

	?>
