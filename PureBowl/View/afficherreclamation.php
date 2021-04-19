<?PHP
	include "../Controller/reclamationC.php";

	$reclamationC=new reclamationC();
	$listeUsers=$reclamationC->afficherreclamationadmin();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
		<title> Afficher Liste reclamations </title>
		<style type="text/css">
.myOtherTable { background-color:#85dcc2;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#3949c6;color:white;width:10%; }
.myOtherTable td, .myOtherTable th { padding:1px;border:1; }
</style>
    </head>
    <body id="reportsPage">
		<button><a href="../reclamation.html">Retour</a></button>
		<hr>
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
						<input type="submit" name="supprimer" value="supprimer" >
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
