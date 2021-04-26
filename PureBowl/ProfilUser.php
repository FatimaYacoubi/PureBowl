<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:/View/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pure Bowl</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/style1.css">    
<style>
            body {
                height: 200vh;
                width: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 111;
            }
            #popup {
                width: 550px;
                height: 250px;
                background-image: url(
https://images-na.ssl-images-amazon.com/images/I/31Xl85rQxbL._SY355_.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                box-shadow: 2px 2px 5px 3px white;
            }
            #emailId {
                text-align: center;
                position: absolute;
                left: 25%;
                top: 25%;
            }
            .submitId {
                position: relative;
                top: 130px;
                left: 180px;
            }
        </style>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<script>
  alert('<?php
// Il est bien connecté
echo 'Welcome dear Client ', $_SESSION['e'];
?>');
</script>
<?php
// Il est bien connecté
include ('index.html');
?> <button><a class="btn-55" href="login.php">Déconnexion</a></button>

</body>
</html>