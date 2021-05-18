<?php
    require_once '../Controller/ProviderC.php';
    require_once '../Controller/NotificationC.php';

    $errors = [];
    $fields = ['name', 'region','num_tel'];
    $optionalFields = [''];
    $values = [];

    /* Récuperer les message de notification**/
  $notifications = NotificationC::displayNotification();
  $countMessageNotRead = NotificationC::countMessage();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($fields as $field) {
            if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
                $errors[] = $field;
            } else {
                $values[$field] = $_POST[$field];
            }

            
        }
    }
    /**
     * Edit Delivery action
     */
    $resultUpdate = false;
	$providerC = new ProviderC();
    if (isset($_POST["EditProviderAction"]) and empty($errors)) {
        $provider = [
            "id" => $_GET["id"] ,
            "name" => $_POST['name'],
            "region" => $_POST['region'],
            "num_tel" => $_POST['num_tel'],
            "image" => $_POST['fileName']
        ];

        $resultUpdate = $providerC->updateProvider($provider);

        if( $resultUpdate === 1){
            header("Location: ". 'success-edit-message.html');
        }

    }
    /**
     * Display current Delivery with parameter id
     */
    if (isset($_GET["id"])){
        $idProvider = $_GET["id"];
        $currentProvider = $providerC->displayProviderById($idProvider);
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Delivery - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
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

  <body>
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

                      <a class="nav-link  " href="delivery.php">
                          <i class="fas fa-cubes"></i> Delivery
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="provider.php">
                          <i class="fas fa-truck"></i> provider
                      </a>
                  </li>
                 
                  <li class="nav-item">
            <a class="nav-link " href="add-notification.php">
                <i class="fas fa-comments"></i> Comments
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
                <span> Notification
                    <i class="fas fa-angle-down">

                    </i>
              <?php if( $countMessageNotRead != 0){
                  echo '<span class="badge">'.  $countMessageNotRead .'</span>';
              } ?>

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                foreach ($notifications as $notification){
                    echo '  <a class="dropdown-item" href="#">'.$notification[ 'objet'].'</a>';
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

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Delivery</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?id='.$_GET["id"]);?>" class="tm-edit-provider-form" method="POST">
                    <div class="form-group mb-3">
                        <label for="name" > Name <span class="error" style="color: orangered">*</span></label >
                        <input id="name" name="name" type="text" class="form-control validate"  value="<?php echo htmlspecialchars($currentProvider['name']);?>"/>
                        <?php if (in_array('name', $errors)): ?>
                            <span class="error" style="color: orangered">Missing field</span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name" > Region <span class="error" style="color: orangered">*</span></label >
                        <input id="region"  name="region"  type="text" class="form-control validate" value="<?php echo htmlspecialchars($currentProvider['region']);?>" />
                        <?php if (in_array('region', $errors)): ?>
                            <span class="error" style="color: orangered">Missing field</span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="num_tel">NumTel <span class="error" style="color: orangered">*</span></label>
                        <input id="num_tel" name="num_tel" type="text" class="form-control validate " value="<?php echo htmlspecialchars($currentProvider['num_tel']);?>" />
                        <?php if (in_array('num_tel', $errors)): ?>
                            <span class="error" style="color: orangered">Missing field</span>
                        <?php endif; ?>
                    </div>
                   
                    <div class="form-group mb-3">
                        <label
                                for="hour_end"
                        >Uploaded file name</label
                        >
                        <input
                                id="fileName"
                                name="fileName"
                                value="<?php if(isset($currentProvider["fileName"])){ echo $currentProvider["fileName"]; }  ?>"
                                type="text"
                                class="form-control validate"
                                style="background-color: #54657d !important;"
                                readonly
                        />
                    </div>

              </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-dummy mx-auto">
                        <?php
                        if (isset($currentProvider) and !empty($currentProvider['image'])){
                            echo '<img width="180" id="preview" src="upload/'.$currentProvider['image'].'" alt="image" />
                           
                            ';
                        }else{
                            echo ' <img width="180" id="preview" src="#" alt="image" style="display: none" />
                             <i
                                class="fas fa-cloud-upload-alt tm-upload-icon"
                                onclick="document.getElementById(\'fileInput\').click();"
                              ></i>';
                        }
                        ?>

                    </div>
                    <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" style="display:none;" />
                        <input
                                type="button"
                                class="btn btn-primary btn-block mx-auto"
                                value="CHANGE PROVIDER IMAGE"
                                onclick="document.getElementById('fileInput').click();"
                        />
                        <input
                                type="button"
                                class="btn btn-primary btn-block mx-auto"
                                value="UPLOAD PROVIDER IMAGE"
                                onclick="uploadFile();"
                        />
                    </div>


                </div>
                  <div class="col-12">
                <button type="submit" name="EditProviderAction" class="btn btn-primary btn-block text-uppercase">Confirm Edit Now</button>
              </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
    <script src="ajaxFiles/uploadImage.js"></script>
  </body>
</html>

