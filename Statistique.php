<?php
if(empty($_SESSION['login']) )
{
  echo "<script> location.href='http://localhost/backlog/?controller=logins&action=loginpage'; </script>";
}
else {
  ?>

<script type="text/javascript" src="assets/js/jsapi.js"></script>
<script type="text/javascript">
    alert("hello");
   google.charts.load('current', {'packages':['corechart','bar']});
   google.charts.setOnLoadCallback(drawProductChart);
   google.charts.setOnLoadCallback(drawSoldChart);

 
  function drawProductChart() {
        var data = new google.visualization.arrayToDataTable([     
          ['Produits', ''],
          <?php foreach ($Produits as $P){ ?> 
          ["<?php echo $P['nom']?>", <?php  echo Produit::SoldProduct($P['nom']);?>],

       <?php } ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
            bars: 'horizontal',
          axes: {
            x: {
              0: { side: 'top', label: ''} 
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Products_chart_div'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
 function drawSoldChart() {
            var data = new google.visualization.DataTable();
     data.addColumn('string', 'Categories');
     data.addColumn('number', 'Numbers');
     data.addRows([
    <?php foreach ($Produits as $P){ ?>      
       ['<?php echo $P['nom'];?>',  <?php echo  Produit::TurnoverProduct($P['nom']);  ?>],
       <?php } ?>
     ]);
   
     var options = {title:'',
                    width:750,
                    height:550,
                    is3D: true,

                };
                 var chart = new google.visualization.PieChart(document.getElementById('Sold_chart_div'));
     chart.draw(data, options);


      };
</script>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
   <ul class="breadcrumb">
      <li>
         <i class="ace-icon fa fa-home home-icon"></i>
         <a href="?controller=pages&action=home">Home</a>
      </li>
      <li>Elements</li>
      <li>Produits</li>
      <li class="active">Statistique</li>
   </ul>
   <!-- /.breadcrumb -->
</div>
<hr>




<div class="col-sm-6">
   <div class="widget-box">
      <div class="widget-header widget-header-flat widget-header-small">
         <h5 class="widget-title">
            <i class="ace-icon fa fa-signal"></i>
            Produits Vendus
         </h5>
      </div>
      <div class="widget-body">
         <div class="widget-main">
    <div id="Products_chart_div" style="width: 900px; height: 550px;"></div>
         </div>
         <!-- /.widget-main -->
      </div>
      <!-- /.widget-body -->
   </div>
   <!-- /.widget-box -->
</div>

<div class="col-sm-6">
   <div class="widget-box">
      <div class="widget-header widget-header-flat widget-header-small">
         <h5 class="widget-title">
            <i class="ace-icon fa fa-signal"></i>
            Revenu Par Produit
         </h5>
      </div>
      <div align="center" class="widget-body">
         <div class="widget-main">
             <div id="Sold_chart_div" style="width: 900px; height: 550px;"></div>
         </div>
         <!-- /.widget-main -->
      </div>
      <!-- /.widget-body -->
   </div>
   <!-- /.widget-box -->
</div>

<?php } ?>