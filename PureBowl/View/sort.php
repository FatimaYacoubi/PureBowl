<?php  
 $connect = mysqli_connect("localhost", "root", "", "webprojet");  
 $query ="SELECT * FROM post ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Dashboard HTML Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
           <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>      
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <title> Afficher Liste posts </title>
    <style type="text/css">
.myOtherTable { background-color:#85dcc2;border-collapse:collapse;color:#000;font-size:14px; }
.myOtherTable th { background-color:#3949c6;color:white;width:10%; }
.myOtherTable td, .myOtherTable th { padding:1px;border:1; }
</style>
    </head>
    <body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="../index1.html">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="displayProduct.php">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displayRecipe.php">
                                <i class="fas fa-shopping-cart"></i>
                                Recipes
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link  " href="../admin/delivery.php">
                              <i class="fas fa-truck"></i> Delivery
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="../admin/provider.php">
                              <i class="fas fa-cubes"></i> provider
                            </a>
                          </li>
                        <li class="nav-item">
                            <a  class="nav-link"  href="../Pack.html">
                                <i class="fas fa-shopping-cart"></i>
                                Pack
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="afficherreclamation.php">
                                <i class="fas fa-comment"></i>
                                Reclamation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../post.html">
                                <i class="fa fa-file" ></i>
                                Posts
                            </a>
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
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <p class="text-white mt-5 mb-5">Welcome back, <b class="text-warning">Admin</b></p>
                    <table >
                        <tr>
                            <td><a href="afficherarchivedpost.php" class="text-warning" ><h4>See archived posts <i class="fas fa-eye"></i></h4></a></td>
                            <td>
                                <a href="statepost.php" class="text-warning"  ><h4>See statistics of Posts's states <i class="fas fa-chart-bar"></i></h4> </a>
                            </td>
                            <td>
                                 <a href="pdfpost.php" class="text-warning" ><h4>Download list of posts as PDF <i class="fa fa-download" aria-hidden="true"></i></h4> </a>
                            </td>
                            <td colspan="6" align="center"><a href="sort.php" class="text-warning" ><h4>Search and sort <i class="fas fa-search"></i></h4> </a> </td>
                        </tr>
                    </table>
                    
                
                   
                </div>
            </div>
<br>
          <table id="employee_data" class="table table-hover tm-table-small tm-product-table">  
                      <a href="afficherpost.php"><h3  align="center" style="color: orange;">Back</h3></a>
                          <thead>  
                               <tr>  
                                    <td style=" color: white; font-size: 20px;">ID</td>  
                                    <td style=" color: white; font-size: 20px;">Title</td>  
                                    <td style=" color: white; font-size: 20px;">Date</td>  
                                    <td style=" color: white; font-size: 20px;">Etat</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["id"].'</td>    
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["titre"].'</td>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["date"].'</td>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["etat"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
    
  </body>
</html>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  