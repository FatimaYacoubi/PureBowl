<?PHP
	include "config.php";
	require_once 'Model/GiftB.php';

	class giftC 
	{
		/*Fonction ajouter */
		function ajoutergift($Gift)
		{
			$sql="INSERT INTO gift (nom, imageG, descr, price) 
			VALUES (:nom, :imageG, :descr, :price)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute
				([
					'nom' => $Gift->getName(),
					'imageG' =>$Gift->getImage(),
					'descr' => $Gift->getdesc(),
					'price' => $Gift->getPrice()
					
				]);	
				echo $query->rowCount() . " records Added successfully <br>";		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		/*Fonction modifier */
		function modifyGift($Gift, $id)
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE gift SET

					    nom = :nom,	
						imageG = :imageG,
						descr = :descr,
						price = :price
						
					WHERE id = :id'
				);
				$query->execute([

					'nom' => $Gift->getNom(),
					'imageG' => $Gift->getImage(),
					'descr' => $Gift->getdesc(),
					'price' => $Gift->getPrice(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        /*Fonction supprimer */
		function deleteGift($id){
			$sql="DELETE FROM gift WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
				echo $query->rowCount() . " records DELETED successfully <br>";
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        /*Fonction afficher */
		function displayGift()
		{
			
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

		/****/	
		function recupererGift($id)
		{
			$sql="SELECT * from gift where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$gift=$query->fetch();
				return $gift;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererGift1($id)
		{
			$sql="SELECT * from gift where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$gift= $query->fetch(PDO::FETCH_OBJ);
				return $gift;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}	
	}

?>