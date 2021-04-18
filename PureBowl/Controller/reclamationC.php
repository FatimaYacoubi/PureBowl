<?PHP
	include "../config.php";
	require_once '../Model/reclamation.php';

	class reclamationC {
		
		function ajouterreclamation($reclamation){
			$sql="INSERT INTO reclamation (description, date, nomClient, emailClient, phoneClient) 
			VALUES (:description,:date,:nomClient, :emailClient, :phoneClient )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'description' => $reclamation->getdescription(),
					'date' => $reclamation->getdate(),
					'nomClient' => $reclamation->getnomClient(),
					'emailClient' => $reclamation->getemailClient(),
					'phoneClient' => $reclamation->getphoneClient()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherreclamation(){
			
			$sql="SELECT * FROM reclamation ORDER BY id DESC LIMIT 1";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherreclamationadmin(){
			
			$sql="SELECT * FROM reclamation ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerreclamation($id){
			$sql="DELETE FROM reclamation WHERE id= :id";
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
		function modifierreclamation($reclamation, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						description = :description, 
						date = :date,
						nomClient = :nomClient,
						emailClient = :emailClient,
						phoneClient = :phoneClient
					WHERE id = :id'
				);
				$query->execute([
					'description' => $reclamation->getdescription(),
					'date' => $reclamation->getdate(),
					'nomClient' => $reclamation->getnomClient(),
					'emailClient' => $reclamation->getemailClient(),
					'phoneClient' => $reclamation->getphoneClient(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererreclamation($id){
			$sql="SELECT * from reclamation where id=$id";
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

		function recupererreclamation1($id){
			$sql="SELECT * from reclamation where id=$id";
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