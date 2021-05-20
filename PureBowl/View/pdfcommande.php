<?php
require('../vendor/autoload.php');
$con=mysqli_connect('localhost','root','','webprojet');
$res=mysqli_query($con,"select * from commande  ");
if(mysqli_num_rows($res)>0){

	$html.='<style type="text/css">
.myOtherTable { background-color:#eedfca;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#d0a772;color:white;width:10%; border: 1px solid #fff;
            border-collapse: collapse; }
.myOtherTable td, .myOtherTable th { padding:1px;border: 1px solid #fff; }
</style>';
    $html.='<div class="container" align="center"> <br> ';

$html.=' <div class="container" align="center"> <h1> Your Orders </h1>';
	$html.='<table  class="myOtherTable" border="1" style="border-collapse:collapse ;
 border: 3px solid black;
 width: 700px;
 height: 100px;
 color: black;

" align="center">';

		$html.='<tr><td>Dish</td><td>Date</td><td>Meat</td><td>Person</td><td>Option</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['dish'].'</td><td>'.$row['date'].'</td><td>'.$row['meat'].'</td><td>'.$row['person'].'</td><td>'.$row['option'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
	$html.='</div>';
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>