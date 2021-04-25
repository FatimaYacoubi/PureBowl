<?PHP
	include "../Controller/GiftBC.php";

	$GiftC=new giftC();
	
	if (isset($_POST["id"])){
		$GiftC->deleteGift($_POST["id"]);
		header('Location:displayGift.php');
	}

?>