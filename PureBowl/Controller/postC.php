<?PHP
	include "../config.php";
	require_once '../Model/post.php';

	class postC {
		
		function ajouterpost($post){
			$sql="INSERT INTO post (description, date, titre, image, etat) 
			VALUES (:description,:date,:titre,:image,1 )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'description' => $post->getdescription(),
					'date' => $post->getdate(),
					'titre' => $post->gettitre(),
					'image' => $post->getimage(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherpost(){
			
			$sql="SELECT * FROM post WHERE etat=1 ORDER BY date DESC LIMIT 3 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherpostadmin(){
			
			$sql="SELECT * FROM post WHERE etat=1 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherarchive(){
			
			$sql="SELECT * FROM post WHERE etat=0 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}


		function supprimerpost($id){
			$sql="DELETE FROM post WHERE id= :id";
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
		function modifierpost($post, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE post SET 
						description = :description, 
						date = :date,
						titre = :titre,
						image = :image,
						etat = :etat
					WHERE id = :id'
				);
				$query->execute([
					'description' => $post->getdescription(),
					'date' => $post->getdate(),
					'titre' => $post->gettitre(),
					'image' => $post->getimage(),
					'etat' => $post->getetat(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function archiverpost($id){
			
			$sql="UPDATE post SET etat = '0' WHERE id= :id";
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
		function unarchiverpost($id){
			
			$sql="UPDATE post SET etat = '1' WHERE id= :id";
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
		function recupererpost($id){
			$sql="SELECT * from post where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererpost1($id){
			$sql="SELECT * from post where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>