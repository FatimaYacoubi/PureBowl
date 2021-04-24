<?PHP
	include "../config.php";
	require_once '../Model/recipe.php';

	class recipeC {
		
		function addRecipe($recipe){
			$sql="INSERT INTO recipes (duration, steps) 
			VALUES (:duration,:steps)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'duration' => $offre->getDuration(),
					'steps' => $offre->getSteps()
					
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
					'UPDATE offre SET 
						duration = :duration, 
						steps = :steps
						
					WHERE idR = :idR'
				);
				$query->execute([
					'duration' => $offre->getDuration(),
					'steps' => $offre->getSteps(),
					
					'idR' => $idR
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
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

				$offer=$query->fetch();
				return $offer;
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
				
				$offer = $query->fetch(PDO::FETCH_OBJ);
				return $offer;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
		

}

	?>
