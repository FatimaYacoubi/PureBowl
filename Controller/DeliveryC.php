<?PHP
	include "../config.php";
	//require_once './Model/Delivery.php';

	class DeliveryC {
		
			
		function displayDelivery(){
			
			$sql="SELECT * FROM delivery";
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