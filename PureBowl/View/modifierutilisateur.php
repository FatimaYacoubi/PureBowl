v<?php
include_once '../Controller/UtilisateurC.php';

$userC = new UtilisateurC();
$error = "";

if (
    isset($_POST["idClient"])&&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["tel"])
){
    if (
        !empty($_POST["idClient"])&&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["tel"]) &&
        (($_POST["tel"]>=20000000) && ($_POST["tel"]<=99999999))&&
        ($_POST["password"]==$_POST["password1"])
    ) {
        $user = new utilisateur(
            $_POST['idClient'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['password'],
            $_POST['adresse'],
            $_POST['tel']
        );

        $userC->modifierutilisateur($user, $_GET['idClient']);
        header('Location:index1.php');
    }
    else if (($_POST["password"]!=$_POST["password1"]) && (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999)))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche / le mot de passe doit être le même dans la confirmation";

    else if (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche";
    else if ($_POST["password"]!=$_POST["password1"])
        $error = "le mot de passe doit être le même dans la confirmation";
}

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

<body class="user-profile">
                     
                   
        
                            <h5 class="title">Modifier le compte</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['idClient'])){
                                $user = $userC->recupererutilisateur($_GET['idClient']);

                                ?>
                                <form action="" method="POST" >
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>CIN</label>
                                                <input type="text" name="cin" id="cin" value = "<?php echo $user->idClient; ?>" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>nom</label>
                                                <input type="text" name="nom" id="nom" value = "<?php echo $user->nom; ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>prenom</label>
                                                <input type="text" name="prenom" id="prenom" value = "<?php echo $user->prenom; ?>" >                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>email</label>
                                                <input type="text" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->email; ?>" >
                                            </div>
                                        </div>

                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>login</label>
                                                <input type="text" name="login" id="login" value = "<?php echo $user->login; ?>">
                                            </div>
                                        </div>


                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password" name="password" id="password" value = "<?php echo $user->password; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>ville</label>
                                                <input type="text" name="ville" id="ville" value = "<?php echo $user->adresse; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3 pr-1">
                                            <div class="form-group">
                                                <label>tel</label>
                                                <input type="text" name="tel" id="tel" value = "<?php echo $user->tel; ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <?php 
               echo "<td><a href=index1.php>cancel</a> "
          ?>              <input type="hidden" name="id" value=<?php echo $_GET['idClient'];?>>

                  

                                        

                                        <div class="col-lg-12">
                                            <td><input type="submit" name="update" value="Update" class="btn-222" ></td>
   
                                        </div>

                                    </div>

                                </form>
                            <?php } ?>
                        </div>
                    </div>
</body> 

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

</body>
</body>

</html>