<?php

  require_once '../Controller/ProviderC.php';
  require_once '../Controller/NotificationC.php';

  $providers = ProviderC::displayProvider();

  /* Récuperer les message de notification**/
  $notifications = NotificationC::displayNotification();
  $countMessageNotRead = NotificationC::countMessage();


if(!empty($_GET['idProviderForDelete'])) {
    $id= trim($_GET['idProviderForDelete']);
    $providers = ProviderC::deleteProvider($id);

    $pageProviderList = $_SERVER['HTTP_HOST'].'PureBowl/PureBowl/admin/provider.php';

    header("Location: ". 'provider.php');
    exit;
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
              <a class="nav-link  " href="displayProduct.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
     </li>
     <li class="nav-item">
                <a class="nav-link" href="displayRecipe.php">
                  <i class="fas fa-shopping-cart"></i> Recipes
                </a>
        </li>

     <li class="nav-item">
        <a class="nav-link " href="delivery.php">
          <i class="fas fa-cubes"></i> Delivery
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="provider.php">
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
                  <th scope="col">&nbsp;</th>
                    <th scope="col">NAME</th>
                    <th scope="col">CITY</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">ID</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php
               // if(isset($deliveries) and !empty($deliveries)){
                    foreach ($providers as $provider){
                      echo ' <tr>
                      <th s cope="row"><img src="upload/'.$provider["image"].'" width="150"/></th>
                    
                    <td class="tm-product-name">'.$provider["name"].'</td>
                    <td>'.$provider["region"].'</td>
                    <td>'.$provider["num_tel"].'</td>            
                    <td>'.$provider["id"].'</td>
                    <td>
                    <td>
                      <a href="provider.php?idProviderForDelete='.$provider[ 'id'].'" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                       <a href="edit-provider.php?id='.$provider[ 'id'].'" class="tm-product-delete-link">
                        <i class="far fa-edit tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>';
                }

                ?>


                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="add-provider.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new provider</a>
           
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
    
  </body>
</html>