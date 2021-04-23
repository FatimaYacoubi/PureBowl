<?PHP
	include "../config.php";
	require_once '../Model/commande.php';

	class commandeC {
		
		function ajoutercommande($commande){
			$sql="INSERT Into commande (dish, meat, option, person, date, time) 
			VALUES (:dish,:meat,:option,:person,:date,:time )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'dish' => $commande->getdish(),
					'meat' => $commande->getmeat(),
					'option' => $commande->getoption(),
					'person' => $commande->getperson(),
					'date' => $commande->getdate(),
					'time' => $commande->gettime()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercommande(){
			
			$sql="SELECT * FROM commande ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommande($id){
			$sql="DELETE FROM commande WHERE id= :id";
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
		function modifiercommande($commande, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
						dish = :dish,
						meat = :meat,
						option = :option,
						person = :person, 
						date = :date,
						time = :time
					WHERE id = :id'
				);
				$query->execute([
					'dish' => $commande->getdish(),
					'meat' => $commande->getmeat(),
					'option' => $commande->getoption(),
					'person' => $commande->getperson(),
					'date' => $commande->getdate(),
					'time' => $commande->gettime(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercommande($id){
			$sql="SELECT * from commande where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recuperercommande1($id){
			$sql="SELECT * from commande where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>