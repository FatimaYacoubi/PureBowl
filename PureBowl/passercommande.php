<?php
$dish = $_POST['dish'];
$meat = $_POST['meat'];
$option = $_POST['option'];
$person = $_POST['person'];
$date = $_POST['date'];
$time = $_POST['time'];
if (!empty($dish) || !empty($meat) || !empty($option) || !empty($person) || !empty($date) || !empty($time)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "purebowl";
    //create connection
    $connexion = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT dish From commande Where dish = ? Limit 1";
     $INSERT = "INSERT Into commande (dish, meat, option, person, date, time) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt =$connexion->prepare($SELECT);
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $connexion->prepare($INSERT);
      $stmt->bind_param("ssssii", $dish, $meat, $option, $person, $date, $time);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     $stmt->close();
     $connexion->close();
    }
} else {
 echo "All field are required";
 die();
}
 ?>