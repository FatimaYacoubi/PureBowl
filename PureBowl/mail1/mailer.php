<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";


$send = mail($to,$subject,$msg,$headers);

if ($send)
{
	echo "<p id='success'>✔️  $to</p>";
}else{
	echo "<p id='error'>❌  $to</p>";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Gift</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="../image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
	<link rel="stylesheet" href="../css/classic.date.css">    
	<link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
 
	<style>
	body{
		margin: 0;
		padding: 0;
		background-color: #FFFFFF;
	}
	::placeholder {
    	color: grey;
    	opacity: .9;
    	font-size: 15px!important;
	}
	.main{
		max-width: 768px;
		margin: 0 auto;
	}
	#title{
		color: ;
	    text-shadow: 0 0 20px grey;
		text-align: center;
		font-family: Montserrat;
	}
	input[type="text"]{
		background-color: #250;
		box-shadow: 0 0 11px 0px white;
		height: 40px;
		width: 47%;
		border: #FFE4C4;
		border-radius: 4px;
		padding: 15px;
		margin: 1%;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		color: grey;
		font-family: Montserrat;
		font-size: 14px;
	}
	input[type="text"]:hover{
		box-shadow: 0 0 11px 0px white;
	}
	#sub{
		width: 96.5%;
	}
	textarea{
		background-color: #FFE4C4;
		box-shadow: 0 0 11px 0px white;
		height: 300px;
    	width: 47%;
    	max-width: 49%;
		border: none;
		border-radius: 4px;
		padding: 15px;
		margin: 1%;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		color: grey;
		font-family: Montserrat;
		font-size: 14px;
	}
	textarea:hover{
		box-shadow: 0 0 11px 0px #DEB887;
	}
	#btn{
		background-color: #white;
		box-shadow: 0 0 11px 0px #DEB887;
		width: 96.5%;
		height: 40px;
	    margin-left: 5px;
		margin-bottom: 40px;
		color: #DAA520;
		border: none;
		border-radius: 4px;
		font-family: Montserrat;
		font-size: 18px;
		font-weight: bold;
		letter-spacing: 1px;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		cursor: pointer;
	}
	#btn:hover{
		color: white;
	}
	#success{
		font-family: Montserrat;
		color: brown;
	}
	#error{
		font-family: Montserrat;
		color: white;
	}
	</style>
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
						<li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="../menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="../about.html">About</a></li>
						<li class="nav-item  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="../reservation.html">Reservation</a>
								<a class="dropdown-item" href="../stuff.html">Stuff</a>
								<a class="dropdown-item" href="../gallery.html">Gallery</a>
							</div>
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
						<li class="nav-item"><a class="nav-link" href="../contact.html">Contact</a></li>
						<li class="nav-item  "><a class="nav-link" href="../reclamation.html">Reclamation</a></li>
						<li class="nav-item active "><a class="nav-link" href="../gift.html">Gift</a></li>
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
		<!-- Start All Pages -->
		<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Write your email</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
<form action="" method="post">
<div class="main" style="margin-top: 100px;">
<h1>Send a mail to your loved ones 💗</h1>
	<div>
		<input type="text" name="from" id="from" class="form-control"  value="purebowlcontact@gmail.com" readonly required autofocus>
		
		<input type="text" name="name" id="name" class="form-control"  value="Pure Bowl" readonly required autofocus>
	</div><br>
	<div>
		<input type="text" name="sub" id="sub" class="form-control"  value="You Got a Gift !" readonly required autofocus>">
	</div><br>
	<div>
		<textarea name="msg" id="msg" placeholder="Write</textarea>
		<textarea name="to" id="to" placeholder="to ..( write an email )"></textarea>
	</div>
	<div><br><br>
		<button id="btn" onclick="return false">SEND</button>
	</div>
	<div id="result"></div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btn").on('click',function(){
		var mailist = $("#to").val().split("\n");
		var tmailist =  mailist.length;
		for (var current = 0; current < tmailist; current++) {
		var from = $("#from").val();
		var name = $("#name").val();
		var sub = $("#sub").val();
		var msg = $("#msg").val();
		var to = mailist[current];
		var data = "ajax=1&from=" + from + "&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
			$.ajax({
				type : 'POST',
				data:  data,
				success: function(data) {
	                $("#result").append(data);
	            }
			});
		}
		var lancer="oui";
	
	if(document.getElementById("to").value=="")
	{
		alert("Vous devez saisir un mail");
		lancer="non";
	}
	else if(document.getElementById("to").value.indexOf("@")==-1 || document.getElementById("to").value.indexOf(".")==-1 || document.getElementById("to").value.indexOf("tn")==-1)
	{
		alert("Le mail ne semble pas correct, corrigez-le");
		lancer="non";
	}	

	});
});
</script>
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
									<img class="d-block w-100 rounded-circle" src="../images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../images/profile-7.jpg" alt="">
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
	<script src="../js/picker.js"></script>
	<script src="../js/picker.date.js"></script>
	<script src="../js/picker.time.js"></script>
	<script src="../js/legacy.js"></script>
	<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>