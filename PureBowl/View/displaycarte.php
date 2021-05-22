<?PHP
	include "../Controller/carteFC.php";

	$couponC=new couponC();
	$listeCoupons=$couponC->displaycoupon();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>coupon Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
      <!-- //lined-icons--> 
      <script src="../js/Chart.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="../js/sort.js"></script>
<style>
div.c {
  position: absolute;
  left: 860px;
  width: 500px;
  height: 700px;
  border: 3px solid orange;
} 
#customers th.headerSortUp{
   background-image:url("../images/up.png") ;
   background-color: #3399FF;
   background-repeat:no-repeat;
   background-position: center right;


 }
 #customers th.headerSortDown{
   background-image:url("../images/down.png") ;
   background-color: #3399FF;

   background-repeat:no-repeat;
   background-position: center right;


 }
</style>
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index1.html">
          <h1 class="tm-site-title mb-0">Services</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
          
          <li class="nav-item">
              <a class="nav-link" href="index1.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-concierge-bell"></i>
                <span>  <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="displayProduct.php">Products</a>
                <a class="dropdown-item" href="displayRecipe.php">Recipes</a>
                
              </div>
            </li>
        
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-gift"></i>
                <span>  <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="displayGift.php">Gifts</a>
                <a class="dropdown-item" href="displaycarte.php">Coupons</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-percentage"></i>


                <span>  <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="showpromo.php">Promotion</a>
                <a class="dropdown-item" href="showOffre.php">Pack</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-exclamation-circle"></i>
                <span> <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="afficherpost.php">Post</a>
                <a class="dropdown-item" href="afficherreclamation.php">Reclamation</a>
                
              </div>
            </li>
        
              <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cubes"></i>
                <span>  <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="affectation.php">Delivery</a>
                <a class="dropdown-item" href="provider.php">Provider</a>
                <a class="dropdown-item" href="affectation.php">affectation</a>
                
              </div>
            </li>
             
     
     
       
     
      <li class="nav-item dropdown notification">

<a
        class="nav-link dropdown-toggle"
        href="#"
        id="navbarDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false">
    <i class="fas fa-bell" style="margin-top: 30.1%;"></i>
     
        <i class="fas fa-angle-down">

        </i>
  <?php if( $countMessageNotRead != 0){
      echo '<span class="badge">'.  $countMessageNotRead .'</span>';
  } ?>

</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php
    foreach ($notifications as $notification){
       
        echo '  <a class="dropdown-item"  href="read-notification.php?id='.$notification[ 'id'].'">Command ID:'.$notification[ 'id_command'].'</a>';
    }
    ?>
</div>

</li>
    
     
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="../login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
       <!-- final affichage de stat -->
    <div class="charts">
                    <div class="c">
						<div class="charts-grids widget"id="pdf">

							<h4 class="title">Stat of coupon prices</h4>
              <br>
            
            </br>
              <button onclick="PPDDFF()" class="btn btn-xs btn-primary btn-block"> Export as PDF</button>
              <br>
            
              </br>
              
							<canvas  id="pie" width="922" height="813" style="width: 738px; height: 651px;"> </canvas>
						</div>
					</div>

                    <?php
                    $pdo=config::getConnexion();
                    $query= $pdo ->prepare("select count(price)as nombre,price from coupon GROUP by price");

                    $query->execute();
                     $stat = $query->fetchAll();

                    ?>


                    <script>

								var pieData = [
                                    <?php

                                    foreach($stat as $count) {


                                        echo "{value:".$count['nombre'].",";
                                        echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                        echo "label: '",$count['price'], "'},";



                                    }
                                            ?>



									];


							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

							</script>
              <script>
            function PPDDFF() {
              const element = document.getElementById("pdf");
              html2pdf()
              .from(element)
              .save();


            }
            </script>
               <script>

$(document).ready(function() {
  $('#customers').tablesorter();

});
  </script>
  <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table  class="table table-hover tm-table-small tm-product-table">
              <!  <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                     
                    <th scope="col">Id </th>
                 
                    <th scope="col">DISCOUNT CODE</th>
                    <th scope="col">Price</th>
                    <th > </th>
                    <th scope="col">DELETE</th>
                    <th scope="col">MODIFY</th>
              <!--      <th scope="col">&nbsp;</th>-->
                  </tr>
                  <tr></tr>
                </thead>
             <tbody>

             	<?PHP
				foreach($listeCoupons as $couponC){
			?>
			<tr>
      <td></td>
          <td><?PHP echo $couponC['id']; ?></td> 
					<td><?PHP echo $couponC['discount_code']; ?></td> 
					<td><?PHP echo $couponC['price']; ?></td>
        
                  
					<td></td>
          <td>
						 
         
             <form method="POST" action="deletecarte.php">
                             <button type="submit" name="supprimer"class="tm-product-delete-link" onclick="return confirm('Are you sure you want to delete this item definitely?');">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i></button> 
                        
                        <input type="hidden" value=<?PHP echo $couponC['id']; ?> name="id">
                        

                        </form>
                            
            </td>
            <td>
				<!--		<a href="modifycarte.php? id=<?PHP echo $couponC['id']; ?>" class="btn btn-primary btn-block text-uppercase"> Modify </a>
					</td>-->
         <td style="width: 30px">
                           <form>
                           <a href="modifycarte.php? id=<?PHP echo $couponC['id']; ?>" class="tm-product-delete-link" onclick="return confirm('Are you sure you want to edit this item ?');" >
                       <i class="far fa-edit tm-product-delete-icon" ></i>
                     </a>
                     </form>
                   
           </td>
				<!--	<td>
						 
             <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
             </a>
          
						<form method="POST" action="deletecarte.php">
						<input type="submit" name="DELETE" value="DELETE" class="btn btn-primary btn-block text-uppercase">
						<input type="hidden" value=<?PHP echo $couponC['id']; ?> name="id"  >
            
						</form> 					</td>-->
					
      
				</tr>
   
			<?PHP
				}
			?> 
             
                </tbody> 
              </table>
            </div>
            <!-- table container -->
            <a
              href="addcarte1.php" 
              class="btn btn-primary btn-block text-uppercase"> <i class="fa fa-plus-square" > </i> </a>
             

              <a href="csv.php">
<button type="button" class="btn btn-info">Exporter xls</button></a>

             
          </div>
        </div>
        
      </div>
    </div>
  



                
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2021</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>
