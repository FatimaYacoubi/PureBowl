<?php
    include "../Controller/reclamationC.php";
    include_onc"../Model/reclamation.php";

	$reclamationC = new reclamationC();
	$error = "";

	if (
        isset($_POST["description"]) && 
        isset($_POST["date"]) &&
        isset($_POST["nomClient"]) && 
        isset($_POST["emailClient"]) && 
        isset($_POST["phoneClient"])
    ){
		if (
            !empty($_POST["description"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["nomClient"]) && 
            !empty($_POST["emailClient"]) && 
            !empty($_POST["phoneClient"])
        ) {
            $user = new reclamation(
                $_POST['description'],
                $_POST['date'], 
                $_POST['nomClient'],
                $_POST['emailClient'],
                $_POST['phoneClient']
            );
            
            $reclamationC->modifierreclamation($user, $_GET['id']);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier reclamation</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherreclamation.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $reclamationC->recupererreclamation1($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description" maxlength="20" value = "<?php echo $user->description; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" maxlength="20" value = "<?php echo $user->date; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="emailClient">Email Client:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="emailClient" id="emailClient" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->emailClient; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="nomClient">Nom:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nomClient" id="nomClient" value = "<?php echo $user->nomClient; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phoneClient">phone CLient:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="phoneClient" id="phoneClient" value = "<?php echo $user->phoneClient; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>