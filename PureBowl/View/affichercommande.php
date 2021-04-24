
<?PHP
  include "../Controller/commandeC.php";

  $commandeC=new commandeC();
  $listeUsers=$commandeC->affichercommande();
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9E8MLs_rO4scn2FKCw_CTgT3AGITGfBAAm5Nt_uWOHPznHX0r13hnQ2uIhRXt9ngEpw&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<style type="text/css">
.myOtherTable { background-color:#eedfca;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#d0a772;color:white;width:10%; border: 1px solid #fff;
            border-collapse: collapse; }
.myOtherTable td, .myOtherTable th { padding:1px;border: 1px solid #fff; }
</style>
<style>
.rectangle {
  height: 300px;
  width: 300px;
  background-color: #b68e5a;
}
 #stepProgressBar  {
  display:  flex;
  justify-content:  space-between;
  align-items:  flex-end;
  width:  700px;
  margin:  0  auto;
  margin-bottom:  40px;
}

.step  {
text-align:  center;
}

.step-text  {
margin-bottom:  10px;
color:  #585555;
size: 50px;
}


.bullet {
  border: 1px solid #c39c6a;
  height: 20px;
  width: 20px;
  border-radius: 100%;
  color: #c39c6a;
  display: inline-block;
  position: relative;
  transition: background-color 500ms;
  line-height:20px;
}


.bullet.completed  {
  color:  white;
  background-color:  #c39c6a;
}



.bullet.completed::after {
  content: '';
  position: absolute;
  right: -150px;
  bottom: 10px;
  height: 1px;
  width: 100px;
  background-color: #b08f63;
}

/* Base styles and helper stuff */
.hidden  {
  display:  none;
}
 
button  {
  padding:  5px  10px;
  border:  1px  solid  black;
  transition:  250ms background-color;
}

button:hover  {
  cursor:  pointer;
  background-color:  black;
  color:  white;
}

button:disabled:hover  {
  opacity:  0.6;
  cursor:  not-allowed;
}

.text-center  {
  text-align:  center;
}
  
.container  {
  max-width:  800px;
  margin:  0  auto;
  margin-top:  50px;
  padding:  40px;
}


   </style>
<!-- End Styles -->     <title> Pure Bowl</title>  

   <meta name="keywords" content=""> 
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <!-- Site Icons -->
    
   <link href="../css/progress-wizard.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
  <!-- Site CSS -->


    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style2.css">    

    <link rel="stylesheet" href="../css/style.css">    
  <!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
  <link rel="stylesheet" href="../css/classic.date.css">    
  <link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
  </head>



  <!--<body>
      <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../index.html">
          <img src="../images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../menu.php">Menu</a></li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Cart</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="../reservation.html">Your Cart</a>
                <a class="dropdown-item" href="../stuff.html">Orders History</a>
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
  </header> -->
  <!-- End header -->
  
    <main class="container">

    

        <br>
        <br>
        <br><br>
        

        <div id="stepProgressBar">
  <div class="step">
    <p class="step-text"> Shopping Cart</p>
    <div class="bullet">1 </div>
  </div>
  <div class="step">
    <p class="step-text"> Sign in</p>
    <div class="bullet">2</div>
  </div>
  <div class="step">
    <p class="step-text">Your Adress</p>
    <div class="bullet">3</div>
  </div>
  <div class="step">
    <p class="step-text">Payment</p>
    <div class="bullet ">4</div>
  </div>
</div> <div class="step">
<div id="main">  
</div>
</div> 

  <table align="center" id="orders" style="width:800px; line-height:40px;" class="myOtherTable"> 
  <tr> 
          </div>
        </div>
      </div>
     </tr colspan="8">> 
        <th>Order </th> 
        <th> Meat Type </th> 
        <th> Option </th> 
        <th> People </th> 
        <th> Date</th> 
        <th> Time </th> 
                <th> Price </th> 

        <th> Edit </th> 
                <th> Delete </th> 

        
        
    
           
          
   </tr> 
    
    <?php 
    $sum=0;
    foreach($listeUsers as $user){
      $sum +=15;
            ?> 
    <tr> 
     <td> <?PHP echo $user['dish']; ?></td>

    <td><?PHP echo $user['meat']; ?></td> 
    <td><?PHP echo $user['option']; ?></td> 
    <td><?PHP echo $user['person']; ?></td> 
    <td><?PHP echo $user['date']; ?></td> 
    <td><?PHP echo $user['time']; ?></td> 
        <td> 15 dt</td> 

              <td>
                                <a href="modifiercommande.php?id=<?PHP echo $user['id']; ?>"  > 
                       <button class="btn-222" style="color:black">Edit</button>

                      </a>
                    </td>
          <td>
            <form method="POST" action="supprimercommande.php">
                        <button type="submit" name="supprimer" class="btn-222" id="1" style="color:black" onClick="\return confirm('Are you sure you want to delete?')\"> Delete</button> 
                        
                        <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                        </form>
          </td>
    </tr> 

  <?php 
               } 
          ?> 
        </table>
        <h1>Votre total est de <strong><?php 

    echo $sum;
            ?></strong> DT</h1>
         </main>

   <br>
  <br>
  
  <div class="step">
  <button align="center" id="previousBtn" class="btn-222">Previous</button>
  <button align="center" id="nextBtn"class="btn-222">Next</button>
  <button align="center" id="finishBtn" class="btn-222" color="black">Finish</button>
  </div>
  

  <div class="customer-reviews-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-title text-center">
            <h2>Customer Reviews</h2>
            <p>Here are some customer reviews</p>
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
                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Wajdi Hachana</strong></h5>
                <h6 class="text-dark m-0">Web Developer</h6>
                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
              </div>
              <div class="carousel-item text-center">
                <div class="img-box p-1 border rounded-circle m-auto">
                  <img class="d-block w-100 rounded-circle" src="../images/profile-3.jpg" alt="">
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
        <script src="../js/progressbar.js"></script>

</body>
</html>
  
