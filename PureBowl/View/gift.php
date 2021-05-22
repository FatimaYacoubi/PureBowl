
<?PHP
	include "../Controller/GiftBC.php";

	$giftC =new giftC ();

	
  
 $listeGifts=$giftC->displayGift();



session_start();
include_once("../config.php");

// On teste si la variable de session existe et contient une valeur
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons 
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	-->
	<link rel="gift" href="css/animate2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
	    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
	

    <!-- [if lt IE 9] -->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <!-- [endif] -->
  

 
</head>

<body>
	<!-- Start header -->
	
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						
					<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item "><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Offres</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="offre.html">Offre</a>
								<a class="dropdown-item" href="offre.html">Promotion</a>
								</div>
							</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="reclamation.html">Reclamation</a></li>
						<li class="nav-item active "><a class="nav-link" href="gift.html">Gift</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Sign in</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="login.html">As an administrator</a>
								<a class="dropdown-item" href="blog-details.html">As a client</a>

							</div>
						</li>

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
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!--video part-->
	<div class="banner">
	<video autoplay="" muted="" loop="">
		<source src="images/gift.mp4" type="video/mp4">
	</video>	
	<div id="ll"></div>
	<script type="text/javascript">
	let ll = document.querySelector('#ll');
	window.addEventListener('scroll',function(){
		let value =window.scrollY;
		bg.style.backgroungSize = 1000 + value*2 +"px";
	})
	
	</script>

	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Special Offres </h2>
						<p>it's not how much we give , but how much love we put into giving.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".chocolate">chocolate</button>
							<button data-filter=".break">Breakfest box</button>
							<!--<button data-filter=".dinner">Dinner</button>-->
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">


             	<?PHP
				foreach($listeGifts as $gift){
			?>
			
				<div class="col-lg-4 col-md-6 special-grid lunch">
   <!--   <th scope="row"> <input type="checkbox" /></th> -->
                  <div class="gallery-single fix" style="height: 400px ;
                     ">
                   <img src="../images/<?php echo $gift['imageG'];?>" class="img-fluid">
                      <div class="why-text">
				<!--	<h5><?PHP echo $gift['id']; ?> </h5>  -->
				<h2>	<?PHP echo $gift['nom']; ?> </h2>
			
					<!-- <td><?PHP echo $gift['imageG']; ?></td> --> 
					<p><?PHP echo $gift['descr']; ?></p>
					
					<h4><?PHP echo $gift['price']; ?></h4>
					 <h4> <a class="btn btn-lg btn-circle btn-outline-new-black" href="../giftLook.php">Get it</a> 
					 </h4> 
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

				
						 
                  <!--    <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a> -->
                    
					</div>	
						
				
				
				</div>
				
				
		

				</div>
	
			</div>
		</div>
	</div>
	 <!--End Menu -->
	

	
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Pure bowl.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3></h3>
					<p class="lead"></p>
					<p class="lead"></p>
					<p></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Tunisie , Riadh Landalous</p>
					<p class="lead"><a href="#">+216 23240020</a></p>
					<p><a href="#"> purebowlcontact@gmail.com</a></p>
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
						<li class="list-inline-item"><a href="purebowlcontact@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Pure Bowl</a> Design By : 
					<a href="https://html.design/">zues prod</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="jquery-3.2.1.min.js"></script>
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