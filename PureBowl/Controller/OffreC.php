<?PHP
	include "../config.php";
	require_once '../Model/Offre.php';

	class offreC {
		
		function ajouterOffre($offre){
			$sql="INSERT INTO offre (nom_offre, image_offre, descrip_offre, type_offre, prix_offre) 
			VALUES (:nom_offre,:image_offre,:descrip_offre, :type_offre, :prix_offre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_offre' => $offre->getNom_offre(),
					'image_offre' => $offre->getImage_offre(),
					'descrip_offre' => $offre->getDescrip_offre(),
					'type_offre' => $offre->getType_offre(),
					'prix_offre' => $offre->getPrix_offre()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherOffre(){
			
			$sql="SELECT * FROM offre";
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
