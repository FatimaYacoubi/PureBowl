<?PHP
	include "config.php";
	require_once 'Model/Dish.php';

	class DishC {
		function addDish($dish){
			$sql="INSERT INTO dishes (name, ingredients, price) 
			VALUES (:name, :ingredients, :price)";
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
		function modifyDish($dish, $name){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE dishes SET 
						
						ingredients = :ingredients,
						price = :price
						
					WHERE name = :name'
				);
				$query->execute([
					
					'ingredients' => $dish->getIngredients(),
					'price' => $dish->getPrice(),
					'name' => $name
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}	
		function displayDish(){
			
			$sql="SELECT * FROM dishes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}		
	}

?>