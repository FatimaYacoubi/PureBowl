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
    </head>
    <body>
		<button><a href="ajout.html">Ajouter une reclamation</a></button>
		<hr>
		<table border=1 align = 'center'>
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
