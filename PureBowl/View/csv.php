<?php
include ('../config.php');

$sql="SELECT * FROM coupon";
$db = config::getConnexion();
/*
$select = $pdo->prepare('
SELECT *
FROM coupon
');

$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();

$newReservations = $select->fetchAll();

try{
    $liste = $db->query($sql);
    return $liste;
}

catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}	
*/
$newReservations =  $db->query($sql);
$excel = "";
$excel .=  "id\tdiscount_code\tprice\n";

foreach($newReservations as $row) {
    $excel .= "$row[id]\t$row[discount_code]\t$row[price]\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=promo codes.xls");

print $excel;
exit;

?>