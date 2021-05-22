<?php
//require('../Controller/PromoC.php');
include_once'../config.php';
include_once'../Model/Dish.php';
include_once'../Model/recipe.php';
//$pdo = new PDO("mysql:host=localhost;dbname=ecoledb", "root", "");


if (isset($_GET['name']))
    $name = $_GET['name'];
else
    $name = 0;

/*if (isset($_GET['as']))
    $as = $_GET['as'];
else
    $as = annee_scolaire_actuelle(); */
$db = config ::getConnexion();
$sql="select duration , dishes.name, ingredients,steps from recipes INNER JOIN dishes on recipes.name=dishes.name where dishes.name=$name";
$name_ofdish = $db->query($sql);
$dish = $name_ofdish->fetch();

$name= strtoupper($dish['name'] );

//$date_naiss = dateEnToDateFr($stagiaire['date_naissance']);

//$descrip_offre = strtoupper($offre['descrip_offre']);

$ingredients = strtoupper($dish['ingredients']);

$duration = strtoupper($dish['duration']);

$steps = strtoupper($dish['steps']);

//$etat= $dish['etat'];

//$num_insc = strtoupper($stagiaire['num_inscription']);


/*$scolarite_stagiaire = $pdo->query("SELECT id_stagiaire,annee_scolaire,classe,nom as Nom_Filiere,niveau_diplome
										FROM scolarite,filiere
										WHERE filiere.id=scolarite.id_filiere
										AND id_stagiaire=$ids
										AND annee_scolaire='$as'");
$scolarite = $scolarite_stagiaire->fetch();

$filiere = strtoupper($scolarite['Nom_Filiere']);

$niveau = strtoupper($scolarite['niveau_diplome']);

$classe = strtoupper($scolarite['classe']); */


require('fpdf.php');

//Création d'un nouveau doc pdf (Portrait, en mm , taille A5)
$pdf = new FPDF('P', 'mm', 'A5');

//Ajouter une nouvelle page
$pdf->AddPage();

// entete
$pdf->Image('wala.JPG', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 16);

// Titre
$name=  $dish['name'] ;

$pdf->Cell(0, 10, "Recipe Detail" , 'TB', 1, 'C');


// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

//$pdf->Write($h, "Je soussigné, Alimi Wala , Responsable Marketing : \n");

//$pdf->Write($h, $retrait . "L'élève : ");

//Ecriture en Gras-Italique-Souligné(U)
$pdf->SetFont('', 'BIU');
//$pdf->Write($h, $nom_prenom . "\n");

//Ecriture normal
$pdf->SetFont('', '');

//$pdf->Write($h, $retrait . "Né (e) Le : " . $date_naiss . " À : " . $lieu_naiss . "\n");
$pdf->Write($h, $retrait . "Dish :" . " " .$name . "\n");
//$pdf->Write($h, $retrait . "CIN N° : " . $cin . " \n");

$pdf->Write($h, $retrait . "Ingredients : " . " ". $ingredients.  " \n");

$pdf->Write($h, $retrait . "Duration : " . " ". $duration.  " \n");
 
$pdf->Write($h, $retrait . "Steps : " . " ". $steps.  " \n");
//$pdf->Write($h, $retrait . "Filière :  " . $filiere . " \n");
//$image_offre= $offre['image_offre'];
//$pdf->Image('$image_offre', 10, 5, 130, 20);


//$pdf->Write($h, $retrait . "etat:  "."	          "  . $etat . " \n");
//$pdf->Write($h, $retrait . "Année de formation :  " . $as . "  \n");

$pdf->Write($h, "We hope you like this recipe as much as we do. It's tasty, super easy and quick to make. " . "  \n");

$pdf->Write($h, "For more recipes you can visit our website PURE BOWL . \n");

//$pdf->Cell(0, 5, 'Fait à El Ghazela Le :' . date('d/m/Y'), 0, 1, 'C');

 

//Afficher le pdf
$pdf->Output('', '', true);
?>

