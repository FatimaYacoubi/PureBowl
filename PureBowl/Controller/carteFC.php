<?PHP
	include "../config.php";
	require_once '../Model/carteF.php';

	class carteC {
		function addcarte($carte){
			$sql="INSERT INTO carte (nbP, dateC) 
			VALUES (:nbP, :dateC)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nbP' => $carte->getNbP(),
					'dateC' => $carte->getdate()
				
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifycarte($carte, $idC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE carte SET 
						nbP = :nbP, 
						dateC = :dateC
						WHERE idC = :idC'
				);
				$query->execute([
                    'nbP' => $carte->getNbP(),
					'dateC' => $carte->getdate(),
					
					'idC' => $idC
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function deletecarte($idC){
			$sql="DELETE FROM carte WHERE idC= :idC";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idC',$idC);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function displaycarte(){
			
			$sql="SELECT * FROM carte";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recuperercarte($idC){
			$sql="SELECT * from carte where idC=$idC";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$carte=$query->fetch();
				return $carte;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recuperercarte1($idC){
			$sql="SELECT * from carte where idC=$idC";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$carte = $query->fetch(PDO::FETCH_OBJ);
				return $carte;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>