<?PHP
	include "../config.php";
	require_once '../Model/Delivery.php';
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


        function addDelivery($delivery){
            $sql="INSERT INTO delivery (name, salary, hour_start, hour_end) 
			VALUES (:name, :salary, :hour_start, :hour_end)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'name' => $delivery->getName(),
                    'salary' => $delivery->getSalary(),
                    'hour_start' => $delivery->getHourStart(),
                    'hour_end' => $delivery->getHourEnd()

                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }
	}

