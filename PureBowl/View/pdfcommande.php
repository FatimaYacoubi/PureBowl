<?php
require('../vendor/autoload.php');
$con=mysqli_connect('localhost','root','','webprojet');
$res=mysqli_query($con,"select * from commande  ");
if(mysqli_num_rows($res)>0){
	$html.='<table border="1" style="border-collapse:collapse ;
 border: 3px solid black;
 width: 700px;
 height: 100px;
 color: blue;

" align="center">';

		$html.='<tr><td>Dish</td><td>Date</td><td>Meat</td><td>Preson</td><td>Option</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['dish'].'</td><td>'.$row['date'].'</td><td>'.$row['meat'].'</td><td>'.$row['person'].'</td><td>'.$row['option'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
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