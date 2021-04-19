<?PHP
	include "../Controller/reclamationC.php";

	$reclamationC=new reclamationC();
	$listeUsers=$reclamationC->afficherreclamation();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste reclamations </title>
		<style type="text/css">
.myOtherTable { background-color:#efdec8;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#d0a772;color:white;width:10%; }
.myOtherTable td, .myOtherTable th { padding:1px;border:1; }
</style>
    </head>
    <body>
		<button><a href="../reclamation.html">Retour</a></button>
		<hr>
		<table align="center" border="1px" style="width:600px; line-height:40px;" class="myOtherTable">
			<tr>
				<th>Id</th>
				<th>Description</th>
				<th>date</th>
				<th>NomClient</th>
				<th>emailClient</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['description']; ?></td>
					<td><?PHP echo $user['date']; ?></td>
					<td><?PHP echo $user['nomClient']; ?></td>
					<td><?PHP echo $user['emailClient']; ?></td>
					<td>
						<form method="POST" action="supprimerreclamation.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierreclamation.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
