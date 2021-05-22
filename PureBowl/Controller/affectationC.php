<?PHP
	require_once "../config.php";
	require_once '../Model/affectation.php';

	class affectationC {
		
		
		
		function ajoutercommande($commande){
			$sql="INSERT Into verification (name) 
			VALUES (:name)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'name' => $commande->getdish(),				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function affichercommande(){
			
			$sql="SELECT * FROM verification ";
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