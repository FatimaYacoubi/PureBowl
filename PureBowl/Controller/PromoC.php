<?PHP
include "../config.php"; 
class PromoC
 {


 	function actualiser()
 	{$db = config::getConnexion();
			try{
 		$sql="SELECT * FROM promo WHERE date_fin < \"".date('Y-m-d')."\"";
$liste=$db->query($sql);
//$query->execute();	
//while($data=$query->fetch())
       // {   
foreach($liste as $data){
        	
        	$pourcent=$data['pourcentage'];
        	//   echo "<script>alert ('$pourcent');</script>";
    		$id_pac=$data['id_pack'];
        	$query2=$db->prepare('SELECT * FROM offre where id_offre=:id_pac');	
        	$query2->execute(['id_pac' => $id_pac]); 
        	$data2=$query2->fetch();
        	$nvprix=$data2['prix_offre'];
       // echo "<script>alert ('$nvprix');</script>";
        	$ancienPrix=($nvprix/$pourcent)*100;
        	// echo "<script>alert ('$ancienPrix');</script>"; 
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix  WHERE id_offre = :id_pac');
			$query->execute(['id_pac' =>$id_pac,'ancienPrix' => $ancienPrix]);
			


        }$sql="DELETE FROM promo WHERE date_fin < \"".date('Y-m-d')."\"";
$query=$db->prepare($sql);
$query->execute(); }
catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	


 	}
 	function ajouterPromo($promo)
	{
		$sql="INSERT INTO promo (id_pack,pourcentage,date_deb,date_fin) VALUES (:id_pack, :pourcentage,:date_deb,:date_fin)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id_pack' => $promo->getId_pack(),
					'pourcentage' => $promo->getPourcentage(),
					'date_deb' => $promo->getDate_deb(),
					'date_fin' => $promo->getDate_fin() ]);		
				$query=$db->prepare(
				'SELECT * FROM offre where id_offre=:id_pack');
		
        $query->execute(['id_pack' => $promo->getId_pack()]); 



         $nouveauprix=0;
       if($data=$query->fetch())
        {
        $prix=$data['prix_offre'];	

         $nouveauprix=$prix-($prix*$promo->getPourcentage())/100;
           echo "<script>alert ('$nouveauprix');</script>";
        } 
 	$query=$db->prepare(
		 'UPDATE offre SET   prix_offre=:nvprix  WHERE id_offre = :id_pack'
	);
		$query->execute(['id_pack' => $promo->getId_pack(),
			'nvprix' => $nouveauprix]);
	
		

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
	/*	$sql="INSERT INTO promo (id_pack,pourcentage,date_deb,date_fin) VALUES (:id_pack, :pourcentage,:date_deb,:date_fin)";
		$db = config::getConnexion();
		try{
       /* $req=$db->prepare($sql);
        $id_pack=$promo->getId_pack();
        $pourcentage=$promo->getPourcentage();
        $date_deb=$promo->getDate_deb();
        $date_fin=$promo->getDate_fin();
       
		$req->bindValue(':id_pack',$id_pack);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':date_deb',$date_deb);
		$req->bindValue(':date_fin',$date_fin); 
		

		$sql="SELECT * FROM offre where id_offre='$id_pack'";
		$query=$db->prepare($sql);
        $query->execute();

        if($data=$query->fetch())
        {
        $prix=$data['prix_offre'];	
        }
        $nouveauprix=$prix-($prix*$pourcentage)/100;

		$sql = "UPDATE produit SET actif=1  ,prix_offre='$nouveauprix'  WHERE id_offre='$id_pack'"; 
		$query=$db->prepare($sql);
		$query->execute();
            $req->execute(); 
           
        } 
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
         */ }
		 

function afficherpromo(){
		$sql="SELECT * from promo";
		$db = config::getConnexion();
		try{PromoC::actualiser();
		$liste=$db->query($sql);
		
		return $liste;
    
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function supprimerPromo($id_promo){
			$sql="DELETE FROM promo WHERE id_promo= :id_promo";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_promo',$id_promo);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


		function modifierPromo($promo, $id_promo){
			try {PromoC::actualiser();
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE promo SET 
						id_pack = :id_pack, 
						pourcentage = :pourcentage,
						date_deb = :date_deb,
						date_fin = :date_fin
					WHERE id_promo = :id_promo'
				);
				$query->execute([
					'id_pack' => $promo->getId_pack(),
					'pourcentage' => $promo->getPourcentage(),
					'date_deb' => $promo->getDate_deb(),
					'date_fin' => $promo->getDate_fin(),
					'id_promo' => $id_promo
				]);
PromoC::actualiser();
				
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererPromo($id_promo){
			$sql="SELECT * from promo where id_promo=$id_promo";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$promo=$query->fetch();
				return $promo;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


	}	


?>