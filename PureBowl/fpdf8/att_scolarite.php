<?php
//require('../Controller/PromoC.php');
include_once'../config.php';
include_once'../Model/Offre.php';

//$pdo = new PDO("mysql:host=localhost;dbname=ecoledb", "root", "");


if (isset($_GET['id_offre']))
    $id_offre = $_GET['id_offre'];
else
    $id_offre = 0;

/*if (isset($_GET['as']))
    $as = $_GET['as'];
else
    $as = annee_scolaire_actuelle(); */
$db = config ::getConnexion();
$sql="SELECT * FROM offre WHERE id_offre=$id_offre";
$identite_offre = $db->query($sql);
$offre = $identite_offre->fetch();

$nom_offre = strtoupper($offre['nom_offre'] );

//$date_naiss = dateEnToDateFr($stagiaire['date_naissance']);

$descrip_offre = strtoupper($offre['descrip_offre']);

$type_offre = strtoupper($offre['type_offre']);

$prix_offre= $offre['prix_offre'];

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
$pdf->Image('nounou.png', 10, 5, 130, 20);

// Saut de ligne
$pdf->Ln(18);


// Police Arial gras 16
$pdf->SetFont('Arial', 'B', 16);

// Titre
$nom_offre=  $offre['nom_offre'] ;
$ids= $offre['id_offre'] ;
$pdf->Cell(0, 10, "$nom_offre" , 'TB', 1, 'C');
$pdf->Cell(0, 10, 'N°:'."$id_offre", 0, 1, 'C');

// Saut de ligne
$pdf->Ln(5);

// Début en police Arial normale taille 10

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, "Je soussigné, Nour Boujmil la secrétaire generale : \n");

//$pdf->Write($h, $retrait . "L'élève : ");

//Ecriture en Gras-Italique-Souligné(U)
$pdf->SetFont('', 'BIU');
//$pdf->Write($h, $nom_prenom . "\n");

//Ecriture normal
$pdf->SetFont('', '');

//$pdf->Write($h, $retrait . "Né (e) Le : " . $date_naiss . " À : " . $lieu_naiss . "\n");
$pdf->Write($h, $retrait . "nom du pack" . "	                    " .$nom_offre . "\n");
//$pdf->Write($h, $retrait . "CIN N° : " . $cin . " \n");

$pdf->Write($h, $retrait . "le  pack contient : " . "\n". $descrip_offre.  " \n");

//$pdf->Write($h, $retrait . "Filière :  " . $filiere . " \n");
//$image_offre= $offre['image_offre'];
//$pdf->Image('$image_offre', 10, 5, 130, 20);

$pdf->Write($h, $retrait . "de type :  " ."	          " .$type_offre. "  \n");


$pdf->Image ("../imageweb/".$offre['image_offre'],90,60,50,30) ;
$pdf->Write($h, $retrait . "prix du pack:  "."	          "  . $prix_offre . " \n");

//$pdf->Write($h, $retrait . "Année de formation :  " . $as . "  \n");

$pdf->Write($h, "Ce pack appartient à l'entreprise PureBowl " . "  \n");

$pdf->Write($h, "La présente identite est délivrée à l'intéressé Pour servir et valoir ce que de droit. \n");

$pdf->Cell(0, 5, 'Fait à El Ghazela Le :' . date('d/m/Y'), 0, 1, 'C');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 8, "La secrétaire Génerale", 1, 1, 'L');

// Décalage de 20 mm à droite
$pdf->Cell(20);
$pdf->Cell(80, 5, "Mme Boujmil Nour", 'LR', 1, 'L');
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'L'); // LR Left-Right
$pdf->Cell(20);
$pdf->Cell(80, 5, ' ', 'LR', 1, 'L');
$pdf->Cell(20);
//$pdf->Image ('images.png',90,100,50,30) ;
$pdf->Cell(80, 5, ' ', 'LR', 1, 'L');
$pdf->Cell(20); 
$pdf->Cell(80, 5, ' ', 'LRB', 1, 'L'); // LRB : Left-Right-Bottom (Bas)

//Afficher le pdf
$pdf->Output('', '', true);
?>

