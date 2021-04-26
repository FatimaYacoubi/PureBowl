

<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['from']."<".$_POST['from'].">";


$send = mail($to,$subject,$msg,$headers);

if ($send) {
	
	echo "<p  id='success'>✔️  $to</p>";
}else{
	echo "<p id='error'>❌  $to</p>";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <!-- Site Metas -->
	  <title>Pure Bowl</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
	<link rel="icon" href="https://image.ibb.co/mNLkGK/hak9.png">
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
	  <!--[if lt IE 9]>-->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->
	
	<style>
	
	.main{
		max-width: 768px;
		margin: 0 auto;
	}
	
	input[type="text"]{
		background-color: #000;
		opacity: 0.6;
		height: 40px;
		width: 47%;
		border: none;
		border-radius: 4px;
		padding: 15px;
		margin: 1%;
		box-sizing: border-box;
		outline: none;
		transition: .5s ease-in;
		color: orange;
		font-family: Montserrat;
		font-size: 14px;
	}
	
	
	textarea{
		background-color: #000;
		opacity: 0.6;
		
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
		color: white;
		font-family: Montserrat;
		font-size: 14px;
	}
	
	#btn{
		background-color: #FFB347;
		
		
		width: 30.5%;
		height: 40px;
	    margin-left: 5px;
		margin-bottom: 40px;
		color: brown;
		border: none;
		border-radius: 20px;
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
		color: grey;
	}
	#success{
		font-family: Montserrat;
		color: green;
	}
	#error{
		font-family: Montserrat;
		color: red;
	}
	</style>
	
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
					<h1>Send your mail </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
<form  action="" method="post">

<div class="main" style="margin-top: 100px;">
	
	<div>
	<input type="text" name="from" id="from" class="form-control"  value="purebowlcontact@gmail.com" readonly required autofocus>
		<input type="text" name="to" id="to" placeholder="send to ..">
	<br>
	<div>
		<input type="text" name="sub" id="sub" placeholder="Subject">
	</div><br>
	<div>
		<textarea name="msg" id="msg" placeholder="Message Text or HTML code"></textarea>
		
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
		
		var sub = $("#sub").val();
		var msg = $("#msg").val();
		var to = mailist[current];
		var data = "ajax=1&from=" + from  + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
			$.ajax({
				type : 'POST',
				data:  data,
				success: function(data) {
	                $("#result").append(data);
	            }
			});
		}


	}); 
   });
</script>

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
</body>
</html>