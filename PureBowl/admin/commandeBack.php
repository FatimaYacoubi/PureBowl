<?php
   require_once '../Controller/affectationC.php';
   require_once '../Controller/DeliveryC.php';
   require_once '../Controller/NotificationC.php';

  $commandes = affectationC::affichercommande();
  $delivery=DeliveryC::displayDelivery();
  /* Récuperer les message de notification**/
  $notifications = NotificationC::displayNotification();
  $countMessageNotRead = NotificationC::countMessage();

  if(isset($_POST["submit"]))
  {
 
    $iddev = $_POST["iddev"];
    $idc = $_POST["idcommande"];
    
   
    DeliveryC::setDelivery($idc,$iddev);
    
    header("Location: ". 'commandeBack.php'); // bich yarja url mrgl
    
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
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

      <style>
          .notification .badge {
              position: absolute;
              top: 12px;
              right: 21px;
              padding: 9px 11px;
              border-radius: 50%;
              background: red;
              color: white;
          }
      </style>
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <?php 
      //    include("menu.php"); 
        ?>
        <nav class="navbar navbar-expand-xl">
<div class="container h-100">
  <a class="navbar-brand" href="../index1.html">
    <h1 class="tm-site-title mb-0">Product Admin</h1>
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
        <a class="nav-link active " href="delivery.php">
          <i class="fas fa-cubes"></i> Delivery
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="provider.php">
          <i class="fas fa-truck"></i> provider
        </a>
      </li>
     
       
        <li class="nav-item">
                      <a class="nav-link  " href="affectation.php">
                        <i class="fas fa-box"></i> affectation
                             </a>
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
                 Notification
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
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    
                    <th scope="col">idcommande</th>
                    <th scope="col">iddelivery</th>
                   
                    
                  </tr>
                </thead>
                <tbody>
                <?php
               // if(isset($commandes) and !empty($commandes)){
                    foreach ($commandes as $commande){

                  
                   

                        echo ' <tr>
                    
                    
                    <td>'.$commande["id"].'</td>';
                    if($commande["delivery_id"]==NULL){
	              echo  '<td>
                
                
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
  pass to 
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">pass the order to:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'"method="POST">
     <input name="idcommande" type="text" class="form-control" hidden value='.$commande["id"].' >
     <select name="iddev" class="form-select" aria-label="Default select example">
  <option disabled selected>select delivery</option>  ';
     foreach ($delivery as $d){

 echo '<option value='.$d["id"].'>'.$d["name"].'</option>';


     };
    echo '  
    
    </select>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
  '              
                
                
                
                .'</td>';
                  }else{
               echo  	'<td>'.$commande["delivery_id"].'</td>';
}
                  
                                
              '</tr>';
                  //  }
                }

                ?>


                </tbody>
              </table>
            </div>
            <!-- table container -->
           
          </div>
        </div>
        
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
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