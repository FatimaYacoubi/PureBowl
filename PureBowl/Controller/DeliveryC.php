<?PHP
	include "../config.php";
	require_once '../Model/Delivery.php';
	class DeliveryC {
		
        function countCommand($id){
            $sql="SELECT COUNT(d.id) as orders FROM commande as c join delivery as d on c.delivery_id = d.id WHERE d.id=".$id;
            $db = config::getConnexion(); 

            try{
                $liste = $db->query($sql);
                return $liste->fetch();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }

        }
			
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


        function countMessage(){

            $sql="SELECT * FROM webprojet.notification where ISNULL(status);";
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste->rowCount();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function displayNotification(){

            $sql="SELECT * FROM notification where ISNULL(status);";
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function displayDeliveryById($id){

            $sql="SELECT * FROM delivery where id=".$id;
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste->fetch();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function addDelivery($delivery){
            $sql="INSERT INTO delivery (name, salary, hour_start, hour_end, image) 
			VALUES (:name, :salary, :hour_start, :hour_end, :image)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'name' => $delivery->getName(),
                    'salary' => $delivery->getSalary(),
                    'hour_start' => $delivery->getHourStart(),
                    'hour_end' => $delivery->getHourEnd(),
                    'image' => $delivery->getImage()

                ]);
                return 1;
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function updateDelivery($delivery){

            $db = config::getConnexion();
            $sql = "UPDATE delivery SET 
                               name=:name, 
                               salary=:salary,
                               hour_start=:hour_start, 
                               hour_end=:hour_end,
                               image=:image  
                               WHERE id=:id";

            try{
                $query= $db->prepare($sql);

                $query->execute([
                    'id' => $delivery["id"],
                    'name' => $delivery["name"],
                    'salary' => $delivery["salary"],
                    'hour_start' => $delivery["hour_start"],
                    'hour_end' => $delivery["hour_end"],
                    'image' => $delivery["image"]

                ]);
                return 1 ;

            } catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function deleteDelivery($id){
            $sql="DELETE FROM delivery WHERE id= :id";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->bindValue(":id", $id);
                $query->execute();
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }
	}

