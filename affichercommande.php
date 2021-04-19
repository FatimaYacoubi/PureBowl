<?php 
$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "purebowl";
        $connexion = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        $query=" SELECT * FROM commande"; 
        $result = $connexion->query($query);
?> 
<!DOCTYPE html> 
<html> 
  <head> 
    <title> Fetch Data From Database </title> 
  </head> 
  <body> 
  <table align="center" border="1px" style="width:600px; line-height:40px;"> 
  <tr> 
    <th colspan="6"><h2>Vos commandes</h2></th> 
    </tr> 
        <th>Order </th> 
        <th> Meat Type </th> 
        <th> Option </th> 
        <th> Number of people </th> 
        <th> Date</th> 
        <th> Time </th> 
        
    </tr> 
    
    <?php 
    while($rows = $result->fetch_assoc())
    { 
    ?> 
    <tr> <td><?php echo $rows['dish']; ?></td> 
    <td><?php echo $rows['meat']; ?></td> 
    <td><?php echo $rows['option']; ?></td> 
    <td><?php echo $rows['person']; ?></td> 
    <td><?php echo $rows['date']; ?></td> 
    <td><?php echo $rows['time']; ?></td> 
    </tr> 
  <?php 
               } 
          ?> 

  </table> 
  </body> 
  </html>
