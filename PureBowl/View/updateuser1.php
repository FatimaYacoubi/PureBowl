<?php
    include "../Controller/UtilisateurC.php";
    include_once "../Model/utilisateur.php";

    $utilisateurC = new utilisateurC();
    $error = "";
    
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"])&&
        isset($_POST["login"]) &&
        isset($_POST["password"])&&
        isset($_POST["adresse"])&&
        isset($_POST["tel"]) 
    ){
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"])&& 
            !empty($_POST["login"])&& 
            !empty($_POST["password"])&& 
            !empty($_POST["adresse"]) && 
            !empty($_POST["tel"])  
        ) {
            $user = new utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['password'],
                $_POST['adresse'],
                $_POST['tel']
            );
            
            $utilisateurC->modifierutilisateur($user, $_GET['idClient']);
            header('refresh:1;url=ProfilUser.php');
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/profil.css">    

    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style1.css">    
    <link rel="stylesheet" href="../css/style.css"> 
        <title> Afficher Liste posts </title>
        <style type="text/css">
.myOtherTable { background-color:#85dcc2;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#3949c6;color:white;width:10%; }
.myOtherTable td, .myOtherTable th { padding:1px;border:1; }
</style>
    </head>
    <body >

    
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <?php
            if (isset($_GET['idClient'])){
                $user = $utilisateurC->recupererutilisateur($_GET['idClient']);
                
        ?>
        <form action="" method="POST">
            <table class="table table-hover tm-table-small tm-product-table">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="idClient" id="idClient"  value = "<?php echo $user->idClient; ?>" disabled>
                    </td>
                    <th>What to do ?</th>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td>


                         <input type="text" name="nom" id="nom"  value = "<?php echo $user->nom; ?>" >
                    </td>
                    <td rowspan="3">
                        <button type="submit"  name = "modifer"  class="tm-product-delete-link" > <i class="far fa-edit tm-product-delete-icon" ></i></button>
                    
                        <button type="reset" class="tm-product-delete-link"><i class="fas fa-window-close"></i></button>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="prenom">Prenom:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prenom" id="prenom"  value = "<?php echo $user->prenom; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email"  value = "<?php echo $user->email; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse" id="adresse"  value = "<?php echo $user->adresse; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login"  value = "<?php echo $user->login; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="password" id="password"  value = "<?php echo $user->password; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">Tel:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel"  value = "<?php echo $user->tel; ?>" >
                    </td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>