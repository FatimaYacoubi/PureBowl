<?php
  include_once "../Controller/commandeC.php";
    include_once"../Controller/UtilisateurC.php";


  $UtilisateurC=new UtilisateurC();
  $listeUsers1=$UtilisateurC->afficherutilisateur();
  $commandeC=new commandeC();
  $listeUsers=$commandeC->affichercommande();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin Pure Bowls</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <!--
    Product Admin CSS Template
    https://templatemo.com/tm-524-product-admin
    -->      <script src="../js/Chart.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="../js/sort.js"></script>
<style>
div.c {
  position: center;
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
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index1.php">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item active">
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
                class="nav-link dropdown-toggle "
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
                <a class="dropdown-item" href="../admin/affectation.php">Delivery</a>
                <a class="dropdown-item" href="../admin/provider.php">Provider</a>
                <a class="dropdown-item" href="../admin/affectation.php">affectation</a>
                
              </div>
            </li>
    
     
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
                </div>
            </div>

        </nav>
        <div class="container" align="center">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class ="container" align="center">
                        <table align="center">
                            <tr>

                                <td>
                                 <canvas id="lineChart"></canvas> </div>
                    <div class="charts">
                    <div class="c">
                        <div class="charts-grids widget"id="pdf">

                            <h4 class="btn btn-xs btn-primary btn-block">Meat statistics</h4>
              <br>
            
              </br>
              
                            <canvas  id="pie" width="922" height="813" style="width: 738px; height: 651px;"> </canvas>
                        </div>
                    </div>

                    <?php
                    $pdo=config::getConnexion();
                    $query= $pdo ->prepare("select count(meat)as nombre,meat from commande GROUP by meat");

                    $query->execute();
                     $stat = $query->fetchAll();

                    ?>


                    <script>

                                var pieData = [
                                    <?php

                                    foreach($stat as $count) {


                                        echo "{value:".$count['nombre'].",";
                                        echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                        echo "label: '",$count['meat'], "'},";



                                    }
                                            ?>



                                    ];


                            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

                            </script>
             
               <script>

$(document).ready(function() {
  $('#customers').tablesorter();

});  
</script>
</td>

                            </tr>
                        </table>
                       
                                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2  class="text-warning" >Clients info</h2>
                         <table class="table">
                            <thead>
                                <tr>
                                    <tr colspan="8">
        <th class="text-warning"> Client id </th> 
        <th class="text-warning"> Name </th> 
        <th class="text-warning"> Last Name </th> 
        <th class="text-warning"> Email</th> 
        <th class="text-warning"> Number </th>  
        <th class="text-warning"> Login </th>                                   
        <th class="text-warning"> Password </th>                           
                                  <th class="text-warning"> Adress </th>   
                                                                    <th class="text-warning"> Edit </th>                           
                                                                    <th class="text-warning"> Delete </th>                           

                        
                        

          
   </tr> 
    
    <?php 
    foreach($listeUsers1 as $user1){
            ?> 
    <tr> 
     <td> <?PHP echo $user1['idClient']; ?></td>

    <td><?PHP echo $user1['nom']; ?></td> 
    <td><?PHP echo $user1['prenom']; ?></td> 
    <td><?PHP echo $user1['email']; ?></td> 
        <td><?PHP echo $user1['tel']; ?></td> 
                <td><?PHP echo $user1['login']; ?></td> 
                <td><?PHP echo $user1['password']; ?></td> 
    <td><?PHP echo $user1['adresse']; ?></td> 
      <td>          <a href="updateuser.php?idClient=<?PHP echo $user1['idClient']; ?>"  > 
                       <button class="btn-222" style="color:black">Edit</button>

                      </a>
                    </td>
          <td>
            <form method="POST" action="supprimeruser.php">
                        <button type="submit" name="supprimer" class="btn-222" id="1" style="color:black" onClick="\return confirm('Are you sure you want to delete?')\"> Delete</button> 
                        
                        <input type="hidden" value=<?PHP echo $user1['idClient']; ?> name="idClient">
                       </td> </form>
<?php 
               } 
          ?> </div>
                            </div>
                        </table> 

                    
          
                    
                            </tr>
                        </div>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="text-warning" >Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <tr colspan="8"> 
        <th class="text-warning">Order </th> 
        <th class="text-warning"> Meat Type </th> 
        <th class="text-warning"> Option </th> 
        <th class="text-warning"> People </th> 
        <th class="text-warning"> Date</th> 
        <th class="text-warning"> Time </th>  
        <th class="text-warning"> Price </th>                           
          
   </tr> 
    
    <?php 
    foreach($listeUsers as $user) {
            ?> 
    <tr> 
     <td> <?PHP echo $user['dish']; ?></td>

    <td><?PHP echo $user['meat']; ?></td> 
    <td><?PHP echo $user['option']; ?></td> 
    <td><?PHP echo $user['person']; ?></td> 
    <td><?PHP echo $user['date']; ?></td> 
    <td><?PHP echo $user['time']; ?></td> 
        <td> 15 dt</td> 
         <td style="width: 30px" >
                           <form method="POST" action="supprimercommande1.php">
                        <button type="submit" name="supprimer" class="btn-222" id="1" style="color:black" onClick="\return confirm('Are you sure you want to delete?')\"> Delete</button> 
                        
                        <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                    </form>

                </td>
<?php 
               } 
          ?> 
                                                                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2021</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Pure Bowl</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="../js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="../js/tooplate-scripts.js"></script>
    <script>
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

<script type="text/javascript">
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>