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
    <title>Dashboard Admin - Dashboard HTML Template</title>
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
    -->
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="../View/index1.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link"  href="Pack.html">
                                <i class="fas fa-shopping-cart"></i>
                                Pack
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="View/afficherreclamation.php">
                                <i class="fas fa-shopping-cart"></i>
                                Reclamation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.html">
                                <i class="far fa-user"></i>
                                Posts
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <table>
                            <tr>
                                <td>
                                <a href="statecommande.php" class="text-warning"  ><h4>See statistics of meat types of orders <i class="fas fa-chart-bar"></i></h4> </a>
                            </td>
                            </tr>
                        </table>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Clients info</h2>
                         <table class="table">
                            <thead>
                                <tr>
                                    <tr colspan="8">
        <th> Client id </th> 
        <th> Name </th> 
        <th> Last Name </th> 
        <th> Email</th> 
        <th> Number </th>  
        <th> Login </th>                                   
        <th> Password </th>                           
                                  <th> Adress </th>   
                                                                    <th> Edit </th>                           
                                                                    <th> Delete </th>                           

                        
                        

          
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
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <tr colspan="8"> 
        <th>Order </th> 
        <th> Meat Type </th> 
        <th> Option </th> 
        <th> People </th> 
        <th> Date</th> 
        <th> Time </th>  
        <th> Price </th>                           
          
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
            <form method="POST" action="archivercommande.php">
                            <button style="height: : 30px" type="submit" name="inarchiver "class="tm-product-delete-link" >
                        <i class="fas fa-archive tm-product-delete-icon" ></i></button> 
                        
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