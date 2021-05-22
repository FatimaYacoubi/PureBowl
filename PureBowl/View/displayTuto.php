<?php
include "../Controller/tutoC.php";

$tutoName = $_GET['dish'];
$tuto=new tutoC();
	$affichage=$tuto->displayTuto($tutoName);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Site Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Recipe</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">


	<link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	 <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
	   <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!--[if lt IE 9]>-->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->

  </head>
<body>
<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="../images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="../about.html">About</a></li>
						<li class="nav-item dropdown">
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Offres</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="../offre.html">Offre</a>
								<a class="dropdown-item" href="../offre.html">Promotion</a>
								</div>
							</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="../blog.html">blog</a>
								<a class="dropdown-item" href="../blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="../affichercommande.php">My orders</a></li>
						<li class="nav-item"><a class="nav-link" href="../reclamation.html">Reclamation</a></li>
						<li class="nav-item"><a class="nav-link" href="../gift.html">Gift</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Sign in</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="../login.html">As an administrator</a>
								<a class="dropdown-item" href="../blog-details.html">As a client</a>

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
					<h1>Your Recipe</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
<?PHP
				foreach($affichage as $tuto){ 
          	?>





<section id="recipe">
 <div class="container">
  <div class="row">

   <div class="recipe_detail clearfix">
     <div class="col-sm-12">

	   <img src="../images/img-01.JPG" class="iw" alt="abc">
	   <h3 class="text-center"> <?PHP echo $tuto['name']; ?> </h3>
	 </div>
   </div>
   <div class="recipe_detail_main_inner_1 clearfix">

              <h4 class="heading_2">Duration</h4>
             <p>
             <?PHP echo $tuto['duration']; ?>
            </p>
              <h4 class="heading_2">Ingredients </h4>
             <p>
             <?PHP echo $tuto['ingredients']; ?>

			</p>
            <h4 class="heading_2"> STEPS</h4>
             <p>

             <?PHP echo $tuto['steps']; ?>

			</p>



  </div>
  </div>
  <div class="text-center">
       <!-- <button onclick="window.print();" class="btn btn-lg btn-circle btn-outline-new-black" id="print-btn"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button> -->
         <!-- <a class="btn btn-lg btn-circle btn-outline-new-black" href="sendMail.php?dish=<?php echo $tuto['name'] ?>&duration=<?php echo $tuto['duration'] ?>&ingredients=<?php echo $tuto['ingredients'] ?>&steps=<?php echo $tuto['steps'] ?>"> <i class="fa fa-envelope-o" aria-hidden="true"></i></a> --> 
		 <a class="btn btn-lg btn-circle btn-outline-new-black" href="../fpdf8/imprimerPdf.php?dish=<?php echo $tuto['name'] ?>&duration=<?php echo $tuto['duration'] ?>&ingredients=<?php echo $tuto['ingredients'] ?>&steps=<?php echo $tuto['steps'] ?>" > <i class="fa fa-file-pdf-o" aria-hidden="true"></i> </a>
		 <a class="btn btn-lg btn-circle btn-outline-new-black" href="testMail.php?dish=<?php echo $tuto['name'] ?>&duration=<?php echo $tuto['duration'] ?>&ingredients=<?php echo $tuto['ingredients'] ?>&steps=<?php echo $tuto['steps'] ?>"> <i class="fa fa-envelope-o" aria-hidden="true"></i></a> 
    
	
		</div>




</section>

<?PHP

 }
				?>
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

<script>
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 10000
	})
});
	</script>
</body>

</html>