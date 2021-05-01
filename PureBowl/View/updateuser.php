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
            header('refresh:1;url=index1.php');
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

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
        <title> Afficher Liste posts </title>
        <style type="text/css">
.myOtherTable { background-color:#85dcc2;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#3949c6;color:white;width:10%; }
.myOtherTable td, .myOtherTable th { padding:1px;border:1; }
</style>
	</head>
	<body id="reportsPage">
        <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index1.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"  href="Pack.html">
                                <i class="fas fa-shopping-cart"></i>
                                Pack
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="afficherreclamation.php">
                                <i class="fas fa-shopping-cart"></i>
                                Reclamation
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
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