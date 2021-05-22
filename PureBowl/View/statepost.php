 <?php
  include_once "../Controller/postC.php";


  $postC=new postC();
  $listeUsers1=$postC->afficherpost();
 
?>
 <!DOCTYPE html>  
 <html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin Pure Bowls</title>
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
    -->      <script src="../js/Chart.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="../js/sort.js"></script>
<style>
div.c {
  position: center;
  left: 860px;
  width: 500px;
  height: 700px;
  border: 3px solid orange;
} 
#customers th.headerSortUp{
   background-image:url("../images/up.png") ;
   background-color: #3399FF;
   background-repeat:no-repeat;
   background-position: center right;


 }
 #customers th.headerSortDown{
   background-image:url("../images/down.png") ;
   background-color: #3399FF;

   background-repeat:no-repeat;
   background-position: center right;


 }
</style>
</head>

      <body>  
            <div class ="container" align="center">
                        <table align="center">
                            <tr>

                                <td>
                                 <canvas id="lineChart"></canvas> </div>
                    <div class="charts">
                    <div class="c">
                        <div class="charts-grids widget"id="pdf">

                            <h4 class="btn btn-xs btn-primary btn-block">Etat statistics (archived/unarchived)</h4>
              <br>
            
              </br>
              
                            <canvas  id="pie" width="922" height="813" style="width: 738px; height: 651px;"> </canvas>
                        </div>
                    </div>

                    <?php
                    $pdo=config::getConnexion();
                    $query= $pdo ->prepare("select count(etat)as nombre,etat from post GROUP by etat");

                    $query->execute();
                     $stat = $query->fetchAll();

                    ?>


                    <script>

                                var pieData = [
                                    <?php

                                    foreach($stat as $count) {


                                        echo "{value:".$count['nombre'].",";
                                        echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                        echo "label: '",$count['etat'], "'},";



                                    }
                                            ?>



                                    ];


                            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

                            </script>
             
               <script>

$(document).ready(function() {
  $('#customers').tablesorter();

});  
</script>
</td>
<script type="text/javascript">
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



      </body>  
 </html>  