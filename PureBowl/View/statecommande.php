 <?php  
 $connect = mysqli_connect("localhost", "root", "", "webprojet");  
 $query = "SELECT meat, count(*) as number FROM commande GROUP BY meat";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../css/templatemo-style.css">
           <title>Stats</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  

           google.charts.load('current', {'packages':['corechart']});  

           google.charts.setOnLoadCallback(drawChart); 

           function drawChart()  
           {  
            
                var data = google.visualization.arrayToDataTable([  
                          ['Meat', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["meat"]."', ".$row["number"]."],";  
                          }  

                          ?> 

                     ]);  
                var options = {  

                      title: 'Percentage of meat types of orders',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  


           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:1500px;">  
                <h1 align="center" style="color: white">These are the statistics of meat types of orders</h1> 
                  <a href="index1.php"><h3  align="center" style="color: orange;">Back</h3></a>
 
                <br />  

                <div id="piechart" style="width: 1500px; height: 800px;
                ">
                  
                </div>  
           </div>  
      </body>  
 </html>  