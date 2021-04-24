<?php
//including the database connection file
include("config.php");
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 

//getting id of the data from url
$id = $_GET['id'] ?? '';

//deleting the row from table
$result = mysqli_query($mysqli,"DELETE FROM commande WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:affichercommande.php");
?>