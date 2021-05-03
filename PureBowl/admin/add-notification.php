<?php
    include "../config.php";
    require_once '../Controller/NotificationC.php';

    /* Récuperer les message de notification**/
    $notifications = NotificationC::displayNotification();
    $countMessageNotRead = NotificationC::countMessage();

    /**
     * ADD notification action
     */
    $notificationC = new NotificationC();

    if (isset($_POST["sendMessageAction"]) and !empty($_POST['objet'])) {
        $message = new Notification(
            $_POST['objet'],
            $_POST['message'],
            
        );

        $result = $notificationC->addMessage($message);

        /* Récuperer les message de notification**/
        $notifications = NotificationC::displayNotification();
        $countMessageNotRead = NotificationC::countMessage();

    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Comment - Dashboard HTML Template</title>
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

                      <a class="nav-link " href="delivery.php">
                          <i class="fas fa-cubes"></i> Delivery
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="provider.php">
                          <i class="fas fa-truck"></i> provider
                      </a>
                  </li>
                 

                 
                  <li class="nav-item">
                      <a class="nav-link active" href="add-notification.php">
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
                              echo '<a class="dropdown-item" href="read-notification.php?id='.$notification[ 'id'].'">'.$notification[ 'objet'].'</a>';
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
                <h2 class="tm-block-title d-inline-block">Add Comment</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="tm-edit-delivery-form" method="POST">
                    <div class="form-group mb-3">
                        <label for="objet" > Object <span class="error" style="color: orangered">*</span></label >
                        <input id="objet" name="objet" type="text" class="form-control validate"/>

                    </div>
                    <div class="form-group mb-3">
                        <label for="message" > Message</label >
                        <textarea
                                name="message"
                                class="form-control validate tm-small"
                                rows="5"
                                style="height: 150px;"
                                required>
                        </textarea>

                    </div>
              </div>
                <div class="col-12">
                <button type="submit" name="sendMessageAction" class="btn btn-primary btn-block text-uppercase">Send Comment</button>
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
