<?PHP
	include "../Controller/GiftBC.php";
	$GiftC=new giftC();
	$listeGift=$GiftC->displayGift();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gift Page - Admin HTML Template</title>
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
  <style>
  div.a {
    position: absolute;
  left: 600px;
  width: 1600px;
  height: 700px;
  border: 3px solid orange;
}

div.c {
  position: absolute;
  left: 50px;
  width: 500px;
  height: 700px;
  border: 3px solid orange;
} 
</style>
?>

  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index1.html">
          <h1 class="tm-site-title mb-0">Gift</h1>
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
              <a class="nav-link" href="../index1.html">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="far fa-file-alt"></i>
                <span> Reports <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Daily Report</a>
                <a class="dropdown-item" href="#">Weekly Report</a>
                <a class="dropdown-item" href="#">Yearly Report</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../products.html">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  " href="displayRecipe.php">
                <i class="fas fa-shopping-cart"></i> Recipes
              </a>
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
                <i class="far fa-file-alt"></i>
                <span> Services <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="displayGift.php">Gifts</a>
                <a class="dropdown-item" href="displaycarte.php">Coupons</a>
                
              </div>
            </li>
            <li class="nav-item">
                            <a class="nav-link " href="../Pack.html">
                                <i class="fas fa-shopping-cart"></i>
                                Pack
                            </a>
              </li>
           
            <li class="nav-item">
              <a class="nav-link" href="../accounts.html">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../promo.html">
                <i class="far fa-user"></i> Promo
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
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
    


 
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
            <input type="text" name="search_plante" id="search_plante" class="form-control" placeholder="Rercher"/>
            <script>
                  $(document).ready(function() {
                    $('#search_plante').keyup(function() {
                      search_table($(this).val());
                    });

                    function search_table(value) {
                      $('#customers tr').each(function() {
                        var found = 'false';
                        $(this).each(function() {
                          if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                            found = 'true';
                          }
                        });
                        if (found == 'true') {
                          $(this).show();
                        } else {
                          $(this).hide();
                        }
                      });
                    }
                  });
                </script>
              <table class="table table-hover tm-table-small tm-product-table">
 

                <thead>
                  <tr>
     
                    <th scope="col">&nbsp;</th>

                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>

                    <th scope="col">&nbsp;</th>
                  </tr>
                  <?php 
	$GiftC=new giftC();
	$listeGift=$GiftC->displayGift();
                        ?>
                  <tr></tr>
                </thead>
             <tbody>

             	<?PHP
				foreach($listeGift as $Gift){
			?>
			<tr>
      <td></td>
                    <td><?PHP echo $Gift['id']; ?></td> 
                    <td><?PHP echo $Gift['nom']; ?></td>
                    <td><?PHP echo $Gift['imageG']; ?></td>  
					<td><?PHP echo $Gift['descr']; ?></td>
                    <td><?PHP echo $Gift['price']; ?></td>
					<td></td>
					<td>
						 
            <!-- <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
             </a>-->
                    
						<form method="POST" action="delete-Gift.php">
						<input type="submit" name="DELETE" value="DELETE" class="btn btn-primary btn-block text-uppercase">
						<input type="hidden" value=<?PHP echo $Gift['id']; ?> name="id"  >
						</form> 					</td>
					<td>
						<a herf="modify-Gift.php? id=<?PHP echo $Gift['id']; ?>" class="btn btn-primary btn-block text-uppercase"> modify </a>
					</td>
				</tr>
			<?PHP
				}
			?> 
     
                </tbody> 
                
              </table>
              
            </div>
            <!-- table container -->
            
          <a
              href="add-Gift.php"
              class="btn btn-primary btn-block text-uppercase mb-3"> Add Gift </a>
             
          </div>
        </div>
        
      </div>
    </div>-->
      <div class="charts">
                    <div class="c">
						<div class="charts-grids widget"id="pdf">

							<h4 class="title">Stat of coupon prices</h4>
            
              <br>
            
              </br>
              
						
            	<canvas  id="pie" width="922" height="813" style="width: 500px; height: 400px;"> </canvas>
              <button onclick="PPDDFF()" class="btn btn-xs btn-primary btn-block"> Export as PDF</button>
            </div>
					</div>

                   <?php
                    $pdo=config::getConnexion();
                    $query= $pdo ->prepare("select count(nom)as nombre,nom from gift GROUP by nom");

                    $query->execute();
                     $stat = $query->fetchAll();

                    ?>


                    <script>

								var pieData = [
                                <?php

                                  foreach($stat as $count) {


                                     echo "{value:".$count['nombre'].",";
                                      echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                      echo "label: '",$count['nom'], "'},";



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
 
    <div class="a">
                                                     <div class="col-md-4 w3l-char">

 						<div class="charts-grids widget">
 							<h4 class="title">statistique</h4>
 							<canvas id="bar" width="680" height="600" style="width: 544px; height: 480px;"> </canvas>
               <button onclick="PPDDFF()" class="btn btn-xs btn-primary btn-block"> Export as PDF</button>
 						</div>
 					</div>

          <!-- debut de la premiere stat sur les reclamations -->

                               <?php

                                $query= $pdo ->prepare("select count(price)as nombre,price from gift GROUP by price");
                                $query->execute();
                                 $bar = $query->fetchAll();
                                 (string)$lables="[";
                                 (string)$valuess='[';

                                 foreach($bar as $choix) {
                                 $lables .= "'".$choix['price']."'".",";
                                 $valuess.="'".(int)$choix['nombre']."'".",";



                                 }
                                   $lables.=']';
                                   $valuess.=']';



                               ?>


                               <script>
                               var barChartData = {
           									<?php echo "labels :".$lables.",";?>
           									datasets : [
           										{
           											<?php echo "fillColor :'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                 echo "strokeColor :'rgba(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
           											 ?>
           											highlightFill: "#e74c3c",
           											highlightStroke: "#e74c3c",
           											<?php echo "data :".$valuess.",";?>
           										},

           									]

           								};


                           new  Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
</script>
<script>      const element = document.getElementById("pdf");
              html2pdf()
              .from(element)
              .save();


            }</script>
                          


           							</script>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                      </div>

              <!--fin stat1 reclamation -->
          
           
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

