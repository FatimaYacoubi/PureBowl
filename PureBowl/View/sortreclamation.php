<?php  
 $connect = mysqli_connect("localhost", "root", "", "webprojet");  
 $query ="SELECT * FROM reclamation ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>         
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

      </head>  
      <body style="background-color: #4e657a;">  
           <br /><br />  
           <div class="container">  
                <h1 align="center" style="color: white;">Search and sort </h1>
                

                <br />  
                <div class="table-responsive">  

                     <table id="employee_data" class="table table-hover tm-table-small tm-product-table">  
                      <a href="afficherreclamation.php"><h3  align="center" style="color: orange;">Back</h3></a>
                          <thead>  
                               <tr>  
                                    <td style=" color: white; font-size: 20px;">ID</td>  
                                    <td style=" color: white; font-size: 20px;">Username</td>  
                                    <td style=" color: white; font-size: 20px;">Date</td>  
                                    <td style=" color: white; font-size: 20px;">Etat</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["id"].'</td>    
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["nomClient"].'</td>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["date"].'</td>  
                                    <td style="background-color: #4e657a;color: white;; font-size: 18px;" class="text-white mt-5 mb-5">'.$row["etat"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  