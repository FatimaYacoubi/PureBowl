<?PHP
	include "../config.php";
	require_once '../Model/carteF.php';

	class couponC {
		/*Fonction ajouter */
		function ajoutercoupon($Coupon)
		{
			$sql="INSERT INTO coupon (discount_code, price) 
			VALUES (:discount_code, :price)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute
				([
					'discount_code' => $Coupon->getcode(),
					'price' => $Coupon->getprice()
					
				]);	
				//echo $query->rowCount() . " records Added successfully <br>";		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifycoupon($coupon, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE coupon SET 
					 
						discount_code = :discount_code,
						price = :price
						WHERE id = :id'
				);
				$query->execute([
                   
					'discount_code' => $coupon->getcode(),
					'price' => $coupon->getprice(),
					
					'id' => $id
				]);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function deletecoupon($id){
			$sql="DELETE FROM coupon WHERE id= :id";
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
		function displaycoupon(){
			
			$sql="SELECT * FROM coupon";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recuperercoupon($id){
			$sql="SELECT * from coupon where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$coupon=$query->fetch();
				return $coupon;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recuperercoupon1($id)
{
			$sql="SELECT * from coupon where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$coupon = $query->fetch(PDO::FETCH_OBJ);
				return $coupon;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>