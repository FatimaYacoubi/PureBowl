<?PHP
	include "../config.php";
	require_once '../Model/Dish.php';

	class DishC {
		function addDish($dish){
			$sql="INSERT INTO dishes (name, ingredients, price,etat) 
			VALUES (:name, :ingredients, :price,1)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'name' => $dish->getName(),
					'ingredients' => $dish->getIngredients(),
					'price' => $dish->getPrice()
				
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifydish($dish, $name){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE dishes SET 
						 
						ingredients = :ingredients,
						
						price = :price
						
						
					where name = :name '
				);
				$query->execute([
					
					'ingredients' => $dish->getIngredients(),
					'price' => $dish->getPrice(),
					
					
					
					'name' => $name
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function deleteDish($name){
			$sql="DELETE FROM dishes WHERE name= :name";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':name',$name);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function displayDish(){
			
			$sql="SELECT * FROM dishes  WHERE etat=1 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recupererDish($name){
			$sql="SELECT * from dishes where name=$name";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$dish=$query->fetch();
				return $dish;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function afficherDisharchive(){
			
			$sql="SELECT * FROM dishes WHERE etat=0";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function archiverDish($name){
			
			$sql="UPDATE dishes SET etat = '0' WHERE name= :name";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':name',$name);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function inarchiverDish($name){
			
			$sql="UPDATE dishes SET etat = '1' WHERE name= :name";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':name',$name);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererDish1($name){
			$sql="SELECT * from dishes where name=$name";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$dish = $query->fetch(PDO::FETCH_OBJ);
				return $dish;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>