<?PHP
	include "../Controller/PromoC.php";

	$promoC=new PromoC();
	
	if (isset($_POST["id_promo"])){
	//	$promoC->annulerPromo($_POST["id_promo"]);
		$promoC->supprimerPromo($_POST["id_promo"]);
		header('Location:showpromo.php');
	}

?>