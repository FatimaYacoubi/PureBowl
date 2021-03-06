<?php
    include "../Controller/OffreC.php";
    include_once '../Model/Offre.php';


	$offreC = new OffreC();
    $error = "";

	if (
        isset($_POST["nom_offre"]) && 
        isset($_POST["image_offre"]) &&
        isset($_POST["descrip_offre"]) && 
        isset($_POST["type_offre"]) && 
        isset($_POST["prix_offre"])
    ){
		if (
            !empty($_POST["nom_offre"]) && 
            !empty($_POST["image_offre"]) && 
            !empty($_POST["descrip_offre"]) && 
            !empty($_POST["type_offre"]) && 
            !empty($_POST["prix_offre"])
        ) {if( preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nom_offre'] )==1 && /*preg_match (" /^[a-zA-Z]{2,}$/ ", $_POST['descrip_offre'] )==1  && */preg_match ( ' #^[0-9]{3}+$# ', $_POST['prix_offre'])==1 ) {
            $offer = new offre(
                $_POST['nom_offre'],
                $_POST['image_offre'], 
                $_POST['descrip_offre'],
                $_POST['type_offre'],
                $_POST['prix_offre']
            );
            
            $offreC->modifierOffre($offer, $_GET['id_offre']);
            header('Location:showOffre.php');
        }

         else {
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>" ;echo "<br>";
            if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['nom_offre'] )==0){echo 'Le nom doit contenir que des lettres '; echo "<br>";}
           /* if(preg_match ( " /^[a-zA-Z]{2,}$/ " , $_POST['descrip_offre'] )==0){echo 'La Description doit contenir que des lettres '; echo "<br>";} */
           
            if(preg_match ( " /^[0-9]{}$/ " , $_POST['prix_offre'] )==0){echo 'Le prix doit contenir 3  chiffres '; echo "<br>";}
            
          }
      }
      else{echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>" ;echo "<br>";
            echo "Missing information";}
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Pack - Dashboard Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
  </head>

  <body>
     <?php
      if (isset($_GET['id_offre'])) {
        $offer = $offreC->recupererOffre($_GET['id_offre']);
        
    ?>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Pack Admin</h1>
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
              <a class="nav-link" href="index.html">
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
                aria-expanded="false"
              >
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
              <a class="nav-link " href="products.html">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>
             <li class="nav-item">
                <a class="nav-link active" href="Pack.html">
                  <i class="fas fa-shopping-cart"></i> Pack
                </a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.html">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="accounts.html">
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
                aria-expanded="false"
              >
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
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Pack</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <div>
        <div id="error">
            <?php echo $error; ?>
        </div>
    
   
     
    <form action="" method="POST" >

                  <div class="form-group mb-3">
                    <label
                      for="id_offre"
                      >Pack ID
                    </label>
                    
                    <input
                      id="id_offre"
                      name="id_offre"
                      type="text"
                      value="<?php echo $offer['id_offre']; ?>" disabled
                      class="form-control validate"
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="nom_offre"
                      >Pack Name
                    </label>
                    <input
                      id="nom_offre"
                      name="nom_offre"
                      type="text"
                      value="<?php echo $offer['nom_offre']; ?>"
                      class="form-control validate"
                    />
                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="descrip_offre"
                      >Description</label
                    >
                     <input
                      id="descrip_offre"
                      name="descrip_offre"
                      type="text"
                      value="<?php echo $offer['descrip_offre']; ?>"
                      class="form-control validate"
                    />
                    
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="type_offre"
                      >Type</label
                    >
                      <input
                      id="type_offre"
                      name="type_offre"
                      type="number"
                      value="<?php echo $offer['type_offre']; ?>" 
                      class="form-control validate"
                    />
                   
                  </div>
     
             
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Prix
                          </label>
                          <input
                            id="prix_offre"
                            name="prix_offre"
                            type="number"
                            value="<?php echo $offer['prix_offre']; ?>"
                            class="form-control validate"
                          />
                        </div>
                         <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="image_offre"
                            >Image
                          </label>

                          <input
                            id="image_offre"
                            name="image_offre"
                            type="text"
                            value="<?php echo $offer['image_offre']; ?>"
                            class="form-control validate"
                          />
                          <input
                            id="image_offre"
                            name="image_offre"
                            type="file"
                            value="<?php echo $offer['image_offre']; ?>"
                            class="btn btn-primary btn-block text-uppercase"
                          />
                        </div>
                  </div>
                  
              </div>
          <!--    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="../imageweb/<?php echo $offer['image_offre'];?>" alt="Product image" class="img-fluid d-block mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="CHANGE IMAGE NOW"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div> -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
              </div>

            </form>
             
      </div>
     
            </div>
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
      
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
   <!-- https://jqueryui.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
 <!--   <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script> 
  -->
<?php
    }
    ?> 
  </body>
 
</html>
