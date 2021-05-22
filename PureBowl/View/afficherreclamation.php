<?PHP
	include "../Controller/reclamationC.php";

	$reclamationC=new reclamationC();
	$listeUsers=$reclamationC->afficherreclamationadmin();

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
        <title> Afficher Liste reclamations </title>
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
                class="nav-link dropdown-toggle active "
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
                <a class="dropdown-item active" href="afficherreclamation.php">Reclamation</a>
                
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                    <table class="table table-hover tm-table-small tm-product-table">
                        <tr>
                            <td><a href="afficherarchivedreclamation.php" class="text-warning" ><h4>See archived Claims <i class="fas fa-eye"></i></h4></a></td>
                            <td>
                                <a href="statereclamation.php" class="text-warning"  ><h4>See statistics of Claims's states <i class="fas fa-chart-bar"></i></h4> </a>
                            </td>
                            <td>
                                 <a href="pdfreclamation.php" class="text-warning" ><h4>Download list of Claims as PDF <i class="fa fa-download" aria-hidden="true"></i></h4> </a>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
                <br>
            </div>
<br>
<br>
<br>
<table id="employee_data" class="table table-hover tm-table-small tm-product-table">  
                          <thead>  
                               <tr>  
                                   <td style=" color: white; font-size: 20px;">ID</td>  
                                    <td style=" color: white; font-size: 20px;">Description</td>  
                                    <td style=" color: white; font-size: 20px;">Date</td>
                                    <td style=" color: white; font-size: 20px;">NomCLient</td>
                                    <td style=" color: white; font-size: 20px;">PhoneCLient</td>
                                    <td style=" color: white; font-size: 20px;">EmailClient</td>  
                                    <td style=" color: white; font-size: 20px;"><p align="center">What to do ?</p></td>

                               </tr> 

                          </thead>  
                         <tr>
                           <?PHP
                foreach($listeUsers as $user){
            ?>
                    <td><?PHP echo $user['id']; ?></td>
                    <td ><?PHP echo $user['description']; ?></td>
                    <td><?PHP echo $user['date']; ?></td>
                    <td><?PHP echo $user['nomClient']; ?></td>
                    <td><?PHP echo $user['phoneClient']; ?></td>
                    <td><?PHP echo $user['emailClient']; ?></td>
                    <td><table align="center">
                      <tr>
                        <td style="width: 30px">
                      
                        
                        <form method="POST" action="supprimerreclamation.php">
                             <button type="submit" name="supprimer "class="tm-product-delete-link" onclick="return confirm('Are you sure you want to delete this item definitely?');">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i></button>Delete 
                        
                        <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                        

                        </form>
                        
                       
                        </td >
                        <td style="width: 30px" ><form method="POST" action="archiverreclamation.php">
                            <button style="height: : 30px" type="submit" name="archiver "class="tm-product-delete-link"onclick="return confirm('Are you sure you want to archive this item?');" >
                        <i class="fas fa-archive tm-product-delete-icon" ></i></button>Archive 
                        
                        <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                    </form>

                </td>
                      </tr>
                    </table></td>
                    
                         </tr>
                           <?PHP
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
    <!-- ALL PLUGINS -->
        <script src="../js/bootstrap.min.js"></script>