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
        	$etat=' ';
        	// echo "<script>alert ('$ancienPrix');</script>"; 
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix,
        	etat_offre=:etat  WHERE id_offre = :id_pac');
			$query->execute(['id_pac' =>$id_pac,'ancienPrix' => $ancienPrix , 'etat' => $etat]);
			
            

        }$sql="DELETE FROM promo WHERE date_fin < \"".date('Y-m-d')."\"";
$query=$db->prepare($sql);
$query->execute(); }
catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	


 	} /*
 	function actualiser1()
 	{$db = config::getConnexion();
			try{
 		$sql="SELECT * FROM promo WHERE date_deb > \"".date('Y-m-d')."\"";
$liste=$db->query($sql);
//$query->execute();	
//while($data=$query->fetch())
       // {   
foreach($liste as $data){
        	
        	$pourcent=$data['pourcentage'];
        	   echo "<script>alert ('$pourcent');</script>";
    		$id_pac=$data['id_pack'];
        	$query2=$db->prepare('SELECT * FROM offre where id_offre=:id_pac');	
        	$query2->execute(['id_pac' => $id_pac]); 
        	$data2=$query2->fetch();
        	$nvprix=$data2['prix_offre'];
       // echo "<script>alert ('$nvprix');</script>";
        	$ancienPrix=($nvprix/$pourcent)*100;
        	$etat=' ';
        	// echo "<script>alert ('$ancienPrix');</script>"; 
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix,
        	etat_offre=:etat  WHERE id_offre = :id_pac');
			$query->execute(['id_pac' =>$id_pac,'ancienPrix' => $ancienPrix , 'etat' => $etat]);
			
            

        } }
catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	


 	}  */
/*
 function actualiser2()
{$db = config::getConnexion();
			try{
 		$sql="SELECT * FROM promo WHERE (date_fin > \".date('Y-m-d').\") AND  (date_deb < \".date('Y-m-d').\")  ";
 	
$liste=$db->query($sql);

//$query->execute();	
//while($data=$query->fetch())
       // {   
foreach($liste as $data){
	$pourcent=$data['pourcentage'];
        	  echo "<script>alert ('$pourcent');</script>";
    		$id_pac=$data['id_pack'];
        	$query2=$db->prepare('SELECT * FROM offre where id_offre=:id_pac');	
        	$query2->execute(['id_pac' => $id_pac]); 
        	$data2=$query2->fetch();
        	$prix=$data2['prix_offre'];
        	$nvprix=$prix-($prix*$pourcent)/100;

        	$etat='en promo' ;
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:nvprix,
        	etat_offre=:etat  WHERE id_offre = :id_pac');
			$query->execute(['id_pac' =>$id_pac,'nvprix' => $nvprix , 'etat' => $etat]);

}
 }catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	

}*/


 /*	function annulerPromo($id_promo){

$db = config::getConnexion();
			try{  echo "<script>alert ('hello');</script>";
				
 		$query=$db->prepare("SELECT * FROM promo WHERE id_promo= :id_promo " );
 		$query->execute(['id_promo' => $id_promo]);
 if($data=$query->fetch())
 {
 	$pourcent=$data['pourcentage'];
        	 echo "<script>alert ('$pourcent');</script>";
    		$id_pack=$data['id_pack'];
        	$query2=$db->prepare('SELECT * FROM offre where id_offre=:id_pack');	
        	$query2->execute(['id_pack' => $id_pack]); 
        	$data2=$query2->fetch();
        	$nvprix=$data2['prix_offre'];
        echo "<script>alert ('$nvprix');</script>";
        	$ancienPrix=($nvprix/$pourcent)*100;
        	$etat=' ';
        	 echo "<script>alert ('$ancienPrix');</script>"; 
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix,
        	etat_offre=:etat  WHERE id_offre = :id_pack');
			$query->execute(['id_pack' =>$id_pack,'ancienPrix' => $ancienPrix , 'etat' => $etat]);}
//$query1=$db->prepare(
				/*'SELECT * FROM offre where id_offre=:id_pack');
		
        $query1->execute(['id_pack' => $promo->getId_pack()]); 
if($data=$query1->fetch())
        {   $prix=$data['prix_offre'];	
            $ancienPrix=($prix/$pourcent)*100;
        	$etat=' ';
         

        }
$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix,
        	etat_offre=:etat  WHERE id_offre = :id_pac');
			$query->execute(['id_pac' =>$id_pac,'ancienPrix' => $ancienPrix , 'etat' => $etat]);
*/

 /*	}catch (Exception $e){
				echo 'Erreur: '.$e->getMessage(); }
				} 

*/


 	function ajouterPromo($promo)
	{
		$sql="INSERT INTO promo (id_pack,pourcentage,/*date_deb,*/date_fin) VALUES (:id_pack, :pourcentage,/*:date_deb,*/:date_fin)";
			$db = config::getConnexion();
			try{ 	
				$query = $db->prepare($sql);
			
				$query->execute([
					'id_pack' => $promo->getId_pack(),
					'pourcentage' => $promo->getPourcentage(),
				//	'date_deb' => $promo->getDate_deb(),
					'date_fin' => $promo->getDate_fin() ]);	

				$query=$db->prepare(
				'SELECT * FROM offre where id_offre=:id_pack');
		
        $query->execute(['id_pack' => $promo->getId_pack()]); 



         $nouveauprix=0;
       if($data=$query->fetch())
        { $etat='en promo' ;
        $prix=$data['prix_offre'];	

         $nouveauprix=$prix-($prix*$promo->getPourcentage())/100;
           echo "<script> alert ('le nouveau prix est $nouveauprix');</script>";

        } 
 	$query=$db->prepare(
		 'UPDATE offre SET   prix_offre=:nvprix, etat_offre=:etat  WHERE id_offre = :id_pack'
	);
		$query->execute(['id_pack' => $promo->getId_pack(),'etat' => $etat,
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
			//PromoC::actualiser1();
			

		$liste=$db->query($sql);
		
		return $liste;
    
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function supprimerPromo($id_promo){
	            
		/*	$sql="DELETE FROM promo WHERE id_promo= :id_promo";
			$db = config::getConnexion();

			$req=$db->prepare($sql);
			$req->bindValue(':id_promo',$id_promo);
			try{ 
				$req->execute();
			}*/
			$db = config::getConnexion();
			try{  echo "<script>alert ('hello');</script>";
				
 		$query=$db->prepare("SELECT * FROM promo WHERE id_promo= :id_promo " );
 		$query->execute(['id_promo' => $id_promo]);
 if($data=$query->fetch())
 {
 	$pourcent=$data['pourcentage'];
        	 echo "<script>alert ('$pourcent');</script>";
    		$id_pack=$data['id_pack'];
        	$query2=$db->prepare('SELECT * FROM offre where id_offre=:id_pack');	
        	$query2->execute(['id_pack' => $id_pack]); 
        	$data2=$query2->fetch();
        	$nvprix=$data2['prix_offre'];
        echo "<script>alert ('l ancien prix est $nvprix');</script>";
        	$ancienPrix=($nvprix/$pourcent)*100;
        	$etat=' ';
        	 echo "<script>alert ('le nouveau prix est$ancienPrix');</script>"; 
        	$query=$db->prepare('UPDATE offre SET   prix_offre=:ancienPrix,
        	etat_offre=:etat  WHERE id_offre = :id_pack');
			$query->execute(['id_pack' =>$id_pack,'ancienPrix' => $ancienPrix , 'etat' => $etat]);}
/*$sql="DELETE FROM promo WHERE id_promo= :id_promo";
$query=$db->prepare($sql);
$query->execute();*/
$sqll="DELETE FROM promo WHERE id_promo= :id_promo";
			$db = config::getConnexion();

			$req=$db->prepare($sqll);
			$req->bindValue(':id_promo',$id_promo);
			try{ 
				$req->execute();
			}catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


		function modifierPromo($promo, $id_promo){
			try {//PromoC::actualiser();
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE promo SET 
						id_pack = :id_pack, 
						pourcentage = :pourcentage,
					/*date_deb = :date_deb,*/
						date_fin = :date_fin
					WHERE id_promo = :id_promo'
				);
				$query->execute([
					'id_pack' => $promo->getId_pack(),
					'pourcentage' => $promo->getPourcentage(),
				//'date_deb'=>$promo->getDate_deb() ,
					'date_fin' => $promo->getDate_fin(),
					'id_promo' => $id_promo
				]); //PromoC::actualiser2();

//PromoC::actualiser();
				
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