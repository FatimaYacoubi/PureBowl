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
		function modifydish($dish, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE dishes SET 
						name = :name, 
						ingredients = :ingredients,
						price = :price
						
						
					WHERE id = :id'
				);
				$query->execute([
					'name' => $dish->getName(),
					'ingredients' => $dish->getIngredients(),
					'price' => $dish->getPrice(),
					
					
					
					'id' => $id
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function deleteDish($id){
			$sql="DELETE FROM dishes WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
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
		function recupererDish($id){
			$sql="SELECT * from dishes where id=$id";
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
		function archiverDish($id){
			
			$sql="UPDATE dishes SET etat = '0' WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function inarchiverDish($id){
			
			$sql="UPDATE dishes SET etat = '1' WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererDish1($id){
			$sql="SELECT * from dishes where id=$id";
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