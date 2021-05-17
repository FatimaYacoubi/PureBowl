<?PHP
	include "../config.php";
	require_once '../Model/Provider.php';
	class ProviderC {
		
       
			
		function displayProvider(){

			$sql="SELECT * FROM provider";
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

        function displayProviderById($id){

            $sql="SELECT * FROM provider where id=".$id;
            $db = config::getConnexion();

            try{
                $liste = $db->query($sql);
                return $liste->fetch();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function addProvider($provider){
            $sql="INSERT INTO provider (name, region, num_tel, image) 
			VALUES (:name, :region, :num_tel, :image)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'name' => $provider->getName(),
                    'region' => $provider->getRegion(),
                    'num_tel' => $provider->getNumTel(),
                    'image' => $provider->getImage()

                ]);
                return 1;
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function updateProvider($provider){

            $db = config::getConnexion();
            $sql = "UPDATE provider SET 
                               name=:name, 
                               num_tel=:num_tel,
                               region=:region,                              
                               image=:image  
                               WHERE id=:id";

            try{
                $query= $db->prepare($sql);

                $query->execute([
                    'id' => $provider["id"],
                    'num_tel' => $provider["num_tel"],
                    'region' => $provider["region"],
                    
                    'image' => $provider["image"]

                ]);
                return 1 ;

            } catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function deleteProvider($id){
            $sql="DELETE FROM provider WHERE id= :id";
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

