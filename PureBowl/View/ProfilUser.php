<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Utilisateur</title>
</head>
<body>
<button><a href="login.php">Déconnexion</a></button>
<hr>
<?php
// Il est bien connecté
echo 'Bienvenue cher client, ', $_SESSION['e'];
include ('../index.php');
?>
</body>
</html>