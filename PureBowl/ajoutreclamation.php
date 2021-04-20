<? php
$description = $_POST['description'];
$date = $_POST['date'];
$nomClient = $_POST['nomClient'];
$emailClient = $_POST['emailClient'];
$phoneClient = $_POST['phoneClient'];
if (!empty($description) || !empty($date) || !empty($nomClient) || !empty($emailClient) || !empty($phoneClient) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "utilisateur";
    //create connection
    $connexion = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT dish From utilisateur Where emailClient = ? Limit 1";
     $INSERT = "INSERT Into reclamation (description, date, nomClient, emailClient, phoneClient) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt =$connexion->prepare($SELECT);
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $connexion->prepare($INSERT);
      $stmt->bind_param("ssssi", $description, $date, $nomClient, $emailClient, $phoneClient);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $connexion->close();
    }
} else {
 echo "All field are required";
 die();
}
 ?> 