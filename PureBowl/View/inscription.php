

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link href="../css/progress-wizard.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
  <!-- Site CSS -->

<style type="text/css">
    #aDiv{width: 300px; height: 300px; margin: 0 auto;}
    body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9E8MLs_rO4scn2FKCw_CTgT3AGITGfBAAm5Nt_uWOHPznHX0r13hnQ2uIhRXt9ngEpw&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
input.controle {
  outline:0;
  font-size:14px;
  width:250px;
} 
label.label {
  display:inline-block;
  width:200px;
  text-align: right;
  font-style: italic;
  margin-right:5px;
}
input.controle:valid {
  border:3px solid #0a0;
}
input.controle:invalid {
  border:3px solid #a00;
}
input.controle:valid + span:before  {
  content: "\f00c";
  font-family: "FontAwesome";
  color:#0a0;
  font-size: 1.5em;
} 
input.controle:invalid + span:before  {
  content: "\f00d";
  font-family: "FontAwesome";
  color:#a00;
  font-size: 1.5em;
}

</style>
    <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/style2.css">    

    <link rel="stylesheet" href="../css/style.css">    
  <!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
  <link rel="stylesheet" href="../css/classic.date.css">    
  <link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<div id="aDiv">
    <div class="container" align="center">
                    <img src="../images/logo.png"  />


        <form action="ajouterCompte.php" method="post" align="center">
            
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                            <h1 class="m-b-20"> SIGN UP</h1>
                </div> 
<br>
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">


                        <input name="nom" type="text" placeholder="nom" required pattern="[a-zA-Z-\.]{3,20}" class="controle">


<BR> </div> </div>
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">

                        <input name="prenom" type="text" placeholder="prenom" class="controle" required pattern="[a-zA-Z-\.]{3,20}">
                <br> </div> </div>
                <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
        <input name="email" type="text" class="controle" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email" required="">
<br> </div> </div>
 
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                        <input name="login" type="text" placeholder="login" required="" class="controle">
<br> </div> </div>
                      
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">  <input name="password" type="password" placeholder="password" required="" class="controle">
<br> </div> </div>
<div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                <input name="password1" type="password" placeholder=" confirmer password" required="" class="controle">
                <br> </div> </div>
                       
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> <input name="adresse" type="text" placeholder="ville" required="" class="controle" pattern="[a-zA-Z-\.]{3,20}">
    <br> </div> </div>
                       
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> <input name="tel" type="text" placeholder="tel" required pattern="[0-9]{8}" class="controle">

<br> </div> </div>
<div id="aDiv">

                        <button type="submit" class="btn-222" id="form-submit" >Create</button>
    <br>

                        <button type="reset" class="btn-222" >Cancel</button>
        <br> </div>
        </form>
<div align="center"> <?php echo ($error) ?> </div>
<br>
<br>



<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>