<?PHP
	include "config.php";
	require_once 'Model/GiftB.php';

	class giftC {
		function ajoutergift($Gift){
			$sql="INSERT INTO gift (nom, descr, price) 
			VALUES (:nom, :descr, :price)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Gift->getName(),
					'descr' => $Gift->getdesc(),
					'price' => $Gift->getPrice()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifyGift($Gift, $nom){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE gift SET 
						
						descr = :descr,
						price = :price
						
					WHERE nom = :nom'
				);
				$query->execute([
					
					'descr' => $Gift->getdesc(),
					'price' => $Gift->getPrice(),
					'nom' => $nom
				]);
				//echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function deleteGift($nom){
			$sql="DELETE FROM gift WHERE nom= :nom";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':nom',$nom);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}	
		function displayGift(){
			
			$sql="SELECT * FROM gift";
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