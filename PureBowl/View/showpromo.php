<?PHP
  include "../Controller/PromoC.php";
 
  $promoC=new PromoC();
  $listePromos=$promoC->afficherpromo();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pack Page - Admin HTML Template</title>
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
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index1.html">
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
            <li class="nav-item dropdown active">
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
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">ID PROMO</th>
                    <th scope="col">ID PACK</th>
                    <th scope="col">POURCENTAGE</th>
                 <!--  <th scope="col">DATE DEBUT</th>  -->
                    <th scope="col">DATE FIN</th>
                    
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
  <?PHP
        foreach($listePromos as $promo){
      ?>
      <tr>
        <td>  <th scope="row"><input type="checkbox" /></th> </td>
          <td><?PHP echo $promo['id_promo']; ?></td> 
          <td><?PHP echo $promo['id_pack']; ?></td>
      
          <td><?PHP echo $promo['pourcentage']; ?></td>
     <!--   <td><?PHP echo $promo['date_deb']; ?></td>  -->
          <td><?PHP echo $promo['date_fin']; ?></td>
          <td></td>
          <td>
             
                  <!--    <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a> -->
                    
            <form method="POST" action="deletepromo.php">
            <button type="submit" name="supprimer" value="supprimer" class="tm-product-delete-link"onclick="return confirm('Are you sure you want to delete this item definitely?');" >
            <input type="hidden" value=<?PHP echo $promo['id_promo']; ?> name="id_promo"  >
            <i class="far fa-trash-alt tm-product-delete-icon"> </i>
                   </button> 
            </form>           </td>
          <td>
            <a href="modifypromo.php?id_promo=<?PHP echo $promo['id_promo']; ?>"  class="tm-product-delete-link" onclick="return confirm('Are you sure you want to edit this item ?');" ><i class="far fa-edit tm-product-delete-icon" ></i></a>
          </td>
          
        </tr>
      <?PHP
        }
      ?> 


                 <!--
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-pack-name">SIMPLE</td>
                    <td>150Dt</td>
                    <td>tarte/ salade/ penne au saumon / soupe/ couscous </td>
                    <td>011</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Lablebi</td>
                    <td>9 Dt</td>
                    <td>soupe Hrissa/ soupe vinaigre blanc/ chiches secs/ oueifs/ pains/ huile</td>
                    <td>012</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Mloukhiya</td>
                    <td>11 Dt</td>
                    <td>hile d'olive/ viande boeuf/ oignon/ feuilles de laurier/ poudre </td>
                    <td>013</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Chorba</td>
                    <td>10 Dt</td>
                    <td>tomate/ oignon/ gingembre/ poivre/ viande de boeuf  </td>
                    <td>014</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Kammounia</td>
                    <td>15 Dt</td>
                    <td>oignon/ tomate/ piment/ gousse d'ail/ tabel</td>
                    <td>015</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Ojja</td>
                    <td>12 Dt</td>
                    <td>tomate/ merguez/ ouefs/ poivron vert </td>
                    <td>016</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Grilled chicken</td>
                    <td>35 Dt</td>
                    <td>poulet/ guile d'olive/ thym séché/ romarin séché/ citron/ ail haché</td>
                    <td>017</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Seafood pasta</td>
                    <td>40.900 Dt</td>
                    <td>fruits de mer/huile d'olive/ vin blanc sec/ail/tomate/sel</td>
                    <td>018</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Fruity juice</td>
                    <td>13 Dt</td>
                    <td>pommes ou banane ou peche ou orange </td>
                    <td>019</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="addpromo.php"
              class="btn btn-primary btn-block text-uppercase mb-3">  <i class="fa fa-plus-square" > </i> </a>
            
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