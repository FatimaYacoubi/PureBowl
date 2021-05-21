<?PHP
	include "../config.php";



	class tutoC {
		function displayTuto($tutoName){

			$sql="select duration , dishes.name, ingredients, steps from recipes INNER JOIN dishes on recipes.name=dishes.name where dishes.name=\"$tutoName\"";
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