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

		function supprimerOffre($id_offre){
			$sql="DELETE FROM offre WHERE id_offre= :id_offre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_offre',$id_offre);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierOffre($offre, $id_offre){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offre SET 
						nom_offre = :nom_offre, 
						image_offre = :image_offre,
						descrip_offre = :descrip_offre,
						type_offre = :type_offre,
						prix_offre = :prix_offre
					WHERE id_offre = :id_offre'
				);
				$query->execute([
					'nom_offre' => $offre->getNom_offre(),
					'image_offre' => $offre->getImage_offre(),
					'descrip_offre' => $offre->getDescrip_offre(),
					'type_offre' => $offre->getType_offre(),
					'prix_offre' => $offre->getPrix_offre(),
					'id_offre' => $id_offre
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		function recupererOffre($id_offre)
		{
			$sql="SELECT * from offre where id_offre=$id_offre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offer=$query->fetch();
				return $offer;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererOffre1($id_offre)
		{
			$sql="SELECT * from offre where id_offre=$id_offre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$offer = $query->fetch(PDO::FETCH_OBJ);
				return $offer;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		 function rechercher($input,$colonne) {
		 	if($colonne == "all") 
		 	{        $sql = "SELECT * from offre WHERE ( nom_offre LIKE \"%$input%\") OR ( id_offre LIKE \"%$input%\") ";
            } else {
        $sql = "SELECT * from offre WHERE ( $colonne LIKE \"%$input%\")  "; }
        $db = config::getConnexion();
        try { $liste=$db->query($sql); 
         

            return $liste;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }


    }

}

	?>
