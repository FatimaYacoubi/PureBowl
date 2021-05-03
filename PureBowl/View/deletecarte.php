<?PHP
	include "../Controller/carteFC.php";

	$CouponC=new couponC();
	
	if (isset($_POST["id"])){
		$CouponC->deletecoupon($_POST["id"]);
		header('Location:displaycarte.php');
	}

?>