<?php
	include "../Controller/postC.php";
	include_once "../Model/post.php";

	$postC = new postC();
	$error = "";
	
	if (
		isset($_POST["description"]) && 
        isset($_POST["date"]) &&
        isset($_POST["titre"]) 
	){
		if (
            !empty($_POST["description"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["titre"]) 
        ) {
            $user = new post(
                $_POST['description'],
                $_POST['date'], 
                $_POST['titre'],
                $_POST['titre']
			);
			
            $postC->modifierpost($user, $_GET['id']);
            header('refresh:5;url=afficherpost.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier post</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherpost.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $postC->recupererpost($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" id="description" maxlength="20" value = "<?php echo $user['description']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" maxlength="20" value = "<?php echo $user['date']; ?>" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="titre">Titre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="titre" id="titre"  value = "<?php echo $user['titre']; ?>" >
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