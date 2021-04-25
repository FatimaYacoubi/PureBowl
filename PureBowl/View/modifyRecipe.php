<?php
  include "../Controller/recipeC.php";
  include_once '../Model/recipe.php';

  $recipeC = new recipeC();
  $error = "";
  
  if (
    isset($_POST["duration"]) && 
        
        isset($_POST["steps"]) &&
        isset($_POST["id"]) 
  ){
    if (
            !empty($_POST["duration"]) && 
         
            !empty($_POST["steps"]) &&
            !empty($_POST["id"]) 
          
        ) {
            $recipe = new recipe(
                $_POST['duration'],
            
                $_POST['steps'],
                $_POST['id']
              
      );
      
            $recipeC->modifyRecipe($recipe, $_GET['idR']);
            header('refresh:5;url=displayRecipe.php');
        }
        else
            $error = "Missing information";
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Modify recipe - Dashboard Admin Template</title>
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
      if (isset($_GET['idR'])) {
        $recipe = $recipeC->recupererRecipe($_GET['idR']);
        
    ?>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Recipes</h1>
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
              <a class="nav-link active" href="displayRecipe.php">
                <i class="fas fa-shopping-cart"></i> Recipes
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
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Modify recipe</h2>
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
                      for="idR"
                      >Recipe ID
                    </label>
                    
                    <input
                      id="idR"
                      name="idR"
                      type="text"
                      value="<?php echo $recipe['idR']; ?>" disabled
                      class="form-control validate"
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="duration"
                      >DURATION
                    </label>
                    <input
                      id="duration"
                      name="duration"
                      type="text"
                      
                      class="form-control validate"
                    />
                  </div>


                  <div class="form-group mb-3">
                    <label
                      for="steps"
                      >STEPS</label
                    >
                     <input
                      id="steps"
                      name="steps"
                      type="text"
                    
                      class="form-control validate"
                    />
                    
                  </div>
                 

                  
    
                       
                  </div>
                  
              </div>
          <!--    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                  <img src="../imageweb <?php echo $offer['image_offre'];?>" alt="Product image" class="img-fluid d-block mx-auto">
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