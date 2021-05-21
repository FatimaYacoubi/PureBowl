<?php
session_start();

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:login.php');
}
include "../Controller/offreC.php";
$offreC=new offreC();
$listeOffers=$offreC->afficherOffre2();
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 60%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->


    <title> Pure Bowl</title>  
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
        <link rel="stylesheet" href="../css/style1.css">    

    <link rel="stylesheet" href="../css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
	<link rel="stylesheet" href="../css/classic.date.css">    
	<link rel="stylesheet" href="../css/classic.time.css">    
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
						<li class="nav-item"><a class="nav-link" href="../gift.html">Gift</a></li>
						<li class="nav-item"><a class="nav-link" href="../about.html">About</a></li>

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
								<a class="dropdown-item" href="login.php">logout</a>
								<a class="dropdown-item" href="inscription.php">Register</a>
							</div>
						</li>';
?>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	</header>
	<!-- End header -->
	
    <main class="container">
<?php
		 $offreC = new offreC();
      if (isset($_GET['id_offre'])) {
        $offer = $offreC->recupererOffre($_GET['id_offre']);
        
    ?>
      <!-- Left Column / Headphones Image -->
      <div class="column">
      	<br>
      	<br>
      	<br>
      	<br><br>
      	<br>
      	<br>
      	<br>
           <img src="../imageweb/<?php echo $offer['image_offre'];?>" class="img-fluid"  width="350px" height="400px">
            
      </div>


      <!-- Right Column -->
  <div class="right-column">

        <!-- Product Description -->
       <div class="product-description">
        
        <br>
      	<br>
      	<br>
      	<br>
          <h1>    </h1>
          <h1>     </h1>
          <h1>    </h1>
          <h1>     </h1>
           
            <!-- Product Pricing -->
       
        <!-- Product Configuration -->
         <div class="product-configuration">

         <!-- Product Color -->
     <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="contact-block">
            <form  action="passercommande.php" method="POST">
            	

              <div class="row">
                <div class="col-md-12">
               
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="dish" class="form-control" name="dish" =type="text" value=" name = <?PHP echo $offer['nom_offre']; ?>" equired data-error="??">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>

                 
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="wasf" class="form-control" value=" description = <?PHP echo $offer['descrip_offre']; ?>" readonly required autofocus>
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                       <input type="text" name="naw3" class="form-control" value="type = <?PHP echo $offer['type_offre']; ?>" readonly required autofocus>
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>  
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="soum" class="form-control" value="price = <?PHP echo $offer['prix_offre']; ?>" readonly required autofocus>
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div> 
                  <div class="col-md-12">
                    <div class="form-group">


                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-12">
                  	 <input type="text" name="pro" class="form-control" value="<?PHP echo $offer['etat_offre']; ?>" readonly required autofocus>
                    <div class="form-group">
               
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  
               <?php
		}
		 ?>
		  <div class="col-md-12">
                    <div class="form-group">
                      <select class="custom-select d-block form-control"  name="person" id="person" required data-error="Please select the number of people">
                        <option disabled selected>Select Person*</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div> 

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
$(document).ready(function(){

	var dtToday= new Date();
	var month= dtToday.getMonth()+1;
	var day= dtToday.getDate();
	var year=dtToday.getFullYear();
	if(month<10)
		month='0'+month.toString();
	if(day<10)
		day='0'+day.toString();
	var maxDate = year+'-'+month+'-'+day;
$('#dateControl').attr('min',maxDate);
})
</script>
                      <input id="dateControl" class="datepicker picker__input form-control" name="date" 
                       placeholder="Please enter the date you want it delivered" type="date" value="">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input id="time" class="time form-control picker__input"  name="time" 
                       placeholder="Please enter the time you want it delivered" type="time" value="" required data-error="Please enter time">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>

          <!-- Cable Configuration -->
 

         <a href="../mail1/mail2.php"> See the Offre * </a>
          </div>
        </div> 
<div class="product-price">
	           <div class="container"></div>

           <div class="container1"></div>

                     <input type="submit" value="Submit"class="btn-55"> 
					
				

            </div>
      </div> </div>
  </form>
    </main> 
<div class="row special-list">
             	<?PHP
				foreach($listeOffers as $offer){
			?>
			
				<div class="col-lg-4 col-md-6 special-grid lunch">
   <!--   <th scope="row"> <input type="checkbox" /></th> -->
                  <div class="gallery-single fix" style="height: 400px ;">
                   <img src="../imageweb/<?php echo $offer['image_offre'];?>" class="img-fluid"  width="350px" height="400px">
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
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Wajdi Hachana</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Mohamed Hedi Yaacoubi</strong></h5>
								<h6 class="text-dark m-0">Dentist</h6>
								<p class="m-0 pt-3">I love this application it helps me alot and the ingredients are the freshest.</p>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>