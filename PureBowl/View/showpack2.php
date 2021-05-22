
<?PHP
session_start();

// On teste si la variable de session existe et contient une valeur
include "../Controller/offreC.php";

	$offreC=new offreC();



	// $listeOffers=$offreC->afficherOffre();
	// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// On se connecte à là base de données
//require_once('connect.php');

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_offre FROM `offre`;';
$db = config::getConnexion();
// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_offre'];

// On détermine le nombre d'articles par page
$parPage = 5;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM `offre` ORDER BY `id_offre` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$listeOffers = $query->fetchAll(PDO::FETCH_ASSOC);
  if ((isset($_POST["recherche"]))&& (isset($_POST["colonne"]))){
   if (!empty(isset($_POST["recherche"]))){
    $n=$_POST["colonne"];
    echo ("colonne = $n " );
     $listeOffers=$offreC->rechercher($_POST["recherche"],$n);
   } }
   	 if (isset($_POST["trier"])){
   	 	$listeOffers=$offreC->afficheroffretri();
   	 } 





//require_once('close.php');

?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Pure Bowl </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="../index.php">
					<img src="../images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="../index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item active"><a class="nav-link" href="showpack2.php">Offre</a></li>

						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="nouveauteblog.php">Nouveaute</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="affichercommande.php">Cart</a></li>
						<li class="nav-item  "><a class="nav-link" href="comment.php">Comment</a></li>
						<li class="nav-item"><a class="nav-link" href="gift.php">Gift</a></li>
						<li class="nav-item"><a class="nav-link" href="../about.php">About</a></li>

						<?php
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Account</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="login.php">login</a>
								<a class="dropdown-item" href="inscription.php">Register</a>
							</div>
						</li>';
}
else
echo '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Account</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="logout.php">logout</a>
								<a class="dropdown-item" href="inscription.php">Register</a>
							</div>
						</li>';
?>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Offre</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Offre</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div> 
			
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<form method="POST" action="">
						<!--<div class="button-group filter-button-group" >
							<button class="active" data-filter="*">All</button>
							<button data-filter=".healthy" value="type_offre">healthy</button>
							<button data-filter=".normal" value="type_offre" >normal</button>
							<button data-filter=".vegan" value="type_offre">vegan</button>  
							 <!-- <input type="submit" name="filtre" value="Valider">

							  <input type="submit" name="type_offre" value="healthy">
--> 
                  <!--  <select name="colonne">
                 <option value="all">ALL</option>
          <option value="type_offre">HEALTHY</option>
         <option value="type_offre">VEGAN</option>
         <option value="type_offre">NORMAL</option>
        </select>
          
-->

						</div>
							</form>
					</div>
				</div>
			</div>
		 <form method="POST" action="">
 <input type="submit" name="trier" value="trier selon prix" style="background-color: #d0a772;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    line-height: 50px;
    display: block;
    padding: 0 10px;
    float: left;
    width: 100%;
    border: none;
    cursor: pointer;
    transition: all 0.5s ease-in-out;">
        <select name="colonne"  class="nav-link dropdown-toggle">
        <option value="all">ALL</option>
          <option value="nom_offre">NAME</option>
         <option value="prix_offre">PRICE</option>
        </select>
          <input type="text" name="recherche" placeholder="rechercher" class="recherche" style="
    display: block;
    background-color: rgba(0,0,0,0.7);
    color: #fff;
    border: none;
    font-size: 19px;
    line-height: 50px;
    margin-bottom: 50px;
    padding: 0 10px;
   
    width: 100%;
    transition: all 0.5s ease-in-out;"> 

          <input type="submit" name="chercher" value="Valider" style="background-color: #d0a772;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    line-height: 50px;
    display: block;
    padding: 0 10px;
    float: left;
    width: 100%;
    border: none;
    cursor: pointer;
    transition: all 0.5s ease-in-out;">


       </form>

			

				
<div class="row special-list">
             	<?PHP
				foreach($listeOffers as $offer){
			?>
			
				<div class="col-lg-4 col-md-6 special-grid lunch">
   <!--   <th scope="row"> <input type="checkbox" /></th> -->
                  <div class="gallery-single fix"  >
                   <img src="../imageweb/<?php echo $offer['image_offre'];?>" class="img-fluid" >
                      <div class="why-text">
				<!--	<h5><?PHP echo $offer['id_offre']; ?> </h5>  -->
				<h2>	<?PHP echo $offer['nom_offre']; ?> </h2>
				<h3>	<?PHP echo $offer['etat_offre']; ?> </h3>
					<!-- <td><?PHP echo $offer['image_offre']; ?></td> --> 
					<p><?PHP echo $offer['descrip_offre']; ?></p>
					<h4><?PHP echo $offer['type_offre']; ?></h4>
					<h4><?PHP echo $offer['prix_offre']; ?></h4>
					 <h4> <a class="btn btn-lg btn-circle btn-outline-new-black" href="buyoffre.php?id_offre=<?PHP echo $offer['id_offre']; ?>">Get it</a> 
					 <a class="btn btn-lg btn-circle btn-outline-new-black" href="../mail1/mail2.php?id_offre=<?PHP echo $offer['id_offre']; ?>">Send it to a friend</a> </h4> 
					  <h4>   </h4>
					</div>
						 
                  <!--    <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a> -->
                    
					</div>	
						
				
				
				</div>
			
			<?PHP
				}
			?> 
				</div>

				<nav>
                    <ul class="pagination">
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>" >
                            <a href="showpack2.php?page=<?= $currentPage - 1 ?>" class="page-link" style="color: #333;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    background: #fff;
    padding: 12px 40px;
    border: none;
    border-radius: 4px;
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    margin: 10px 15px;
    display: inline-block;">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="showpack2.php?page=<?= $page ?>" class="page-link" style="color: #333;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    background: #fff;
    padding: 12px 40px;
    border: none;
    border-radius: 4px;
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    margin: 10px 15px;
    display: inline-block;"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                        <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="showpack2.php?page=<?= $currentPage + 1 ?>" class="page-link" style="color: #333;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    background: #fff;
    padding: 12px 40px;
    border: none;
    border-radius: 4px;
    border: 1px solid #e4e4e4;
    border-radius: 4px;
    margin: 10px 15px;
    display: inline-block;">Suivante</a>
                        </li>
                    </ul>
                </nav>
			
		<!--	<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="imageweb/n3.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Healthy Pack 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $7.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="imageweb/n1.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Healthy pack 2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $9.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="imageweb/n2.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>healthy pack 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $10.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Normal pack 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $15.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>normal pack 2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $18.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="imageweb/n2.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>normal pack 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $20.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="imageweb/veg1.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>vegan pack 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $25.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="imageweb/veg2.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>vegan pack 2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $22.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="imageweb/veg3.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>vegan pack 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $24.79</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../js/jquery.superslides.min.js"></script>
	<script src="../js/images-loded.min.js"></script>
	<script src="../js/isotope.min.js"></script>
	<script src="../js/baguetteBox.min.js"></script>
	<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>