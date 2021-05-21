<?PHP
  include "../Controller/commandeC.php";
  require_once ("db.php");
  $db_handle = new DBController();
  $commandeC=new commandeC();
  $listeUsers=$commandeC->affichercommande();
  switch ($_GET["action"]) {
    case "show_discount":
       
            if (! empty($_POST["discountCode"])) {
                $priceByCode = $db_handle->runQuery("SELECT price FROM coupon WHERE discount_code='" . $_POST["discountCode"] . "'");
                
                if (! empty($priceByCode)) {
                    foreach ($priceByCode as $key => $value) {
                        $discountPrice = $priceByCode[$key]["price"];
                    }
                    if (! empty($discountPrice) && $discountPrice > $_POST["totalPrice"]) {
                        $message = "Invalid Discount Coupon";
                    }
                } else {
                    $message = "Invalid Discount Coupon";
                }
            }
       
        break;
          }
          ini_set('error_reporting', E_ALL);
?>

<?php
session_start();
include_once("../config.php");

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:login.php');


}

?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- End Styles -->     <title> Pure Bowl</title>  
<form id="applyDiscountForm" method="post"
	
        action="coupon.php?action=show_discount"

        onsubmit="return validate();">
   <meta name="keywords" content=""> 
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <!-- Site Icons -->
    
   <link href="../css/progress-wizard.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
  <!-- Site CSS -->
    <link rel="stylesheet" href="../css/affichercommande.css"> 


    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style2.css">    

    <link rel="stylesheet" href="../css/style.css">  
        <link rel="stylesheet" href="../css/style3.css">    
  
  <!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
  <link rel="stylesheet" href="../css/classic.date.css">    
  <link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
  </head>
  <body>
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
            <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="showpack2.php">Offre</a></li>

            
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
                <a class="dropdown-item" href="logout.php">logout</a>
                <a class="dropdown-item" href="inscription.php">Register</a>
              </div>
            </li>';
?>
            
          </ul>
        </div>
      </div>
    </nav>
  </header> -->
  <!-- End header -->
  
    <main class="container">
<br>
<br>
<br>
<br>
        

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
    <p class="step-text">Delivery</p>
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
<div id="orders">

<table align="center">
  <tr>
    <th>
      <a href="pdfcommande.php"  > 
                       <button class="btn-7" style="color:black 
                       " ><p style="font-size:15px;">Download as PDF </p><i class="fa fa-download" aria-hidden="true"></i> </button>

                      </a>
    </th>
  </tr>
</table>
<table id="employee_data" align="center" style="width:1200px; line-height:40px;" class="myOtherTable">  
                          <thead>  
                               <tr>  
                                    <th >Order</th>  
                                    <th> Meat Type </th> 
                                    <th> Option </th> 
                                    <th> People </th> 
                                    <th> Date</th> 
                                    <th> Time </th>
                                    <th>prix</th>
                                    <th ><p align="center">What to do ?</p></th>
        

                               </tr>  
                          </thead>  
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

    <td> 15</td>
    <td>
                               <table>
                                <tr>
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
                               
                                  <td>
                                    <a href="reclamation.php?id=<?PHP echo $user['id']; ?>"  > 
                       <button class="btn-222" style="color:black">Claim</button>

                      </a>
                   
                                  </td>
                     
                                </tr> 

                               </table> 
                              
                   
            
         
                                
                    </td>
</tr>

<?php 
}
?>
   <?php     
                    
                    if (!empty($discountPrice) && $sum > $discountPrice) {
                        $total_price_after_discount = $sum - $discountPrice;
                        
                ?>
                        <tr>
                            <td colspan="1" align="right">Discount:<input
                                type="hidden" name="discountPrice"
                                id="discountPrice"
                                value="<?php echo $discountPrice; ?>"></td>
                           <td align="right" colspan="1"><strong><?php echo "Dt " . number_format($discountPrice, 2); ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="1" align="right">Total after
                                Discount:</td>
                            <td align="right" colspan="1"><strong><?php echo "Dt " . number_format($total_price_after_discount, 2); ?></strong></td>
                            <td></td>
                        </tr>      <?php 
                    }
                    ?>
                      <?php 
                   
              ?> 
<h3 id="total" align="center" class="btn-55">Votre total est de <strong><?php 

    echo $sum;
            ?></strong> DT</h3>
                     </table>
                     <div id="discount-grid">
            <div class="discount-section">
                <div class="discount-action">
                    <span id="error-msg-span" class="error-message">
                    <?php
                    if (! empty($message)) {
                        echo $message;
                    }
                    ?>
                    </span> <span></span><input type="text"
                        class="discount-code" id="discountCode"
                        name="discountCode" size="15"
                        placeholder="Enter Coupon Code" /><input
                        id="btnDiscountAction" type="submit"
                        value="Apply Discount" class="btnDiscountAction" />
                </div>
            </div>
        </div>
   
  
  </div>
   <form action="ajouterCompte.php" id="commande" method="post"  align="center">
            <main class="container">

      
                            <h1> Commande instantannée</h1>
               
<br>
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">


                        <input name="nom" type="text" placeholder="nom" required="">


<BR> </div> </div> </div> 
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">

                        <input name="prenom" type="text" placeholder="prenom" required="">
                 </div> </div>  </div> 
                <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
        <input name="email" type="text" pattern=".+@gmail.com|.+@esprit.tn" placeholder="email" required="">
<br> </div> </div> </div> 
 
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                        <input name="login" type="text" placeholder="login" required="">
<br> </div> </div> </div> 
                       
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> <input name="adresse" type="text" placeholder="ville" required="">
    <br> </div> </div> </div> 
                       
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> 
              <input name="tel" type="text" placeholder="tel" required="">
<br> </div>  </div> </div> 

</main> 

        </form> 
<br>
 <div id="delivery">
   <table class="myOtherTable">
<div class="container">
    <tr>
      <th> Delivery Person</th>
      <th> Name and Number</th>
    <th>Estimated Delivery time
    </th>
    </tr>
    <tr>
      <td>
        <img src="../images/livreur1.jpg" alt="">
      </td>
      <td>
        Sahar Zouari +21655228866
      </td>
<td>
  In 30 minutes
</td>
   </tr>
 </div>
 </table>
</div>
<div id="payment" align="center">
<h2>You can only Pay Cash , Please Press "Finish" to make your order!</h2>
<h4> New Payment methods will be available soon</h4>
<h5> Pure Bowl's team thanks you</h5>
</div>
  <div class="step">
  <button align="center" id="previousBtn" class="btn-222">Previous</button>
  <button align="center" id="nextBtn"class="btn-222">Next</button>
  <button align="center" id="finishBtn" class="btn-222" color="black">Finish</button>
  </div> 
 
</main>



  

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
                <script src="../js/hide.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
           <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>      
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    
          
   </body>
  </html>
  <script>
function validate() {
    var valid= true;
     if($("#discountCode").val() === "") {
        valid = false;
     }

     if(valid == false) {
         $('#error-msg-span').text("Discount Coupon Required");
     }
     return valid;
}
</script>
  <script>  
$(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>