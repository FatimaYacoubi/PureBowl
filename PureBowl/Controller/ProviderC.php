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


        function addProvider($provider){
            $sql="INSERT INTO provider (name, region, num_tel) 
			VALUES (:name, :region, :num_tel)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'name' => $provider->getName(),
                    'region' => $provider->getRegion(),
                    'num_tel' => $provider->getNumTel()
                  

                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }
        function deleteProvider($id){
			$sql="DELETE FROM provider WHERE id= :id";
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
	}

