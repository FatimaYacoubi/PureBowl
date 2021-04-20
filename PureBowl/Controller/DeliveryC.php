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
        function deleteDelivery($id){
			$sql="DELETE FROM delivery WHERE id= :id";
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
		function modifierOffre($delivery, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE delivery SET 
						name = :name, 
						hour_start = :hour_start,
						hour_end = :hour_end,
						salary = :salary,
						
					WHERE id_offre = :id_offre'
				);
				$query->execute([
					'name' => $offre->getName(),
					'hour_start' => $offre->getHourStart(),
					'hour_end' => $offre->getHourEnd(),
					'salary' => $offre->getSalary(),				
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}

