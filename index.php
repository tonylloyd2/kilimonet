<?php
include "./lib/connect.php";

$query_emali1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='cattle'");
$query_emali2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='emali' && species='sheep/Goat'");
$query_kimana1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='cattle'" );
$query_kimana2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='kimana' && species='sheep/Goat'" );
$query_sulatan1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='cattle'");
$query_sulatan2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Sultan_hamud' && species='sheep/Goat'");
$query_kedong1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='cattle'");
$query_kedong2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='Ewuaso_Kedong' && species='sheep/Goat'");
$query_illibilis1 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='cattle'");
$query_illibilis2 = mysqli_query($conn,"SELECT * FROM questionnaire where  market='illibilis' && species='sheep/Goat'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/tablecss.css">
<link rel="stylesheet" href="./css/main.css">
<script  type="text/javascript" src="./js/table.js"></script>
<script type="text/javascript" src="./js/tab.js"></script>
<script src="./js/script.js" defer></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'cattle', 'sheep/goat'],
      ['mon nov,7/2022',  8000,      3200],
      ['fri nov,11/2022',  9200,      3000],
      ['mon nov,14/2022',  8700,       3375],
      ['fri nov,18/2022',  10000,      3200],
      ['mon nov,21/2022',  10700,      3500]
    ]);

    var options = {
      title: 'Illbisil market Performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);

    var data2 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
      ['fri nov,5/2022',  8750,      3330],
      ['fri nov,12/2022',  9000,      3400],
      ['fri nov,19/2022',  10500,       3600]
    ]);

    var options2 = {
      title: 'Emali market performance',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart2 = new google.visualization.LineChart(document.getElementById('curve_chart2'));

    chart2.draw(data2, options2); 

    var data3 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  8000,      3400],
    ['thu nov,10/2022',  9500,      3600],
    ['thu nov,17/2022',  9000,       4300]
    ]);

    var options3 = {
    title: 'Sultan Hamud market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart3 = new google.visualization.LineChart(document.getElementById('curve_chart3'));

    chart3.draw(data3, options3); 

    var data4 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['thu nov,3/2022',  1900,      3900],
    ['thu nov,10/2022',  1170,      4335],
    ['thu nov,17/2022',  660,       4000]
    ]);

    var options4 = {
    title: 'Ewuaso Kedong market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart4 = new google.visualization.LineChart(document.getElementById('curve_chart4'));

    chart4.draw(data4, options4);
    
    var data5 = google.visualization.arrayToDataTable([
    ['Year', 'cattle', 'sheep/goat'],
    ['tue nov,8/2022',  8000,      2850],
    ['tue nov,15/2022',  8500,      2700],
    ['tue nov,22/2022',  9900,       3400]
    ]);

    var options5 = {
    title: 'kimana market performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart5 = new google.visualization.LineChart(document.getElementById('curve_chart5'));

    chart5.draw(data5, options5);
  }
</script>
</head>
<body>
<article class="topnav" id="myTopnav">
    <article class="logo">
        <img class="Mylogo" src="./images/jpg.webp">
  <a href="#" class="active">Home</a> 
  <a href="./home/resource.php">Resource</a>
  <a href="./home/blog.php">Blog</a>
  <a href="./users/survey.php">Survey</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</article>
</article>
<article class="container">
    <article class="section"> 
            <h1>Welcome<span></span></h1>
                <h1 style="padding-left:30%;">To</h1>
            <a href="./users/survey.php"><h1>Kilimonet</h1></a>
        </article>
    </article>
    <!--livestock prices at various livestock yards displaced in tabular format-->
              <!--Illbisil market-->
             
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, perspiciatis. 
                Veritatis repellendus rem vero Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis officia suscipit voluptate, nihil neque rerum quos incidunt dicta, 
                mollitia pariatur non asperiores totam ex esse veritatis? Placeat harum mollitia 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis quisquam, maxime natus rem incidunt
                 in distinctio.
                 Numquam dolor iste molestiae ullam possimus, est quasi impedit? Quae odio recusandae cum suscipit.
                  architecto.
                 cum soluta nam labore recusandae, mollitia ut neque id quidem. Iusto rerum molestias nobis 
                 beatae dolor.</p>
            
                 <div class="toptext">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati dolor unde, 
                        nemo ducimus aut facere debitis numquam, 
                        ipsum perspiciatis, eveniet Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit ducimus 
                        voluptatibus ipsa necessitatibus at aliquam minima inventore tenetur, vero, porro cumque explicabo. 
                        Ad asperiores quisquam, magnam consequuntur eaque tenetur ipsa.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ab quisquam asperiores nostrum 
                        reiciendis cumque quis iste 
                        corrupti voluptatibus commodi in consequatur vitae animi eius, ullam rerum aperiam dolores aut.
                        accusantium non eum consectetur modi dicta incidunt quis atque laborum!
                      </p>
                      
                    </div>
                    <!-- <div class="image-aside">
                        <img src="./images/img1.jpg" alt="" srcset="">
                      </div> -->
              
            
                      <h1 class="title">Illbisil Market</h1>
            <hr>
             
            <div class="">
            <p>Illbisil market is  One of the biggest livestock markets in East Africa, which takes place 
                every Monday and Friday.
                This market is accredited by county government of kajiado 
                 People come from far and wide to sell and buy animals here, an incredible sight above </p>

                 <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_illibilis1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_illibilis1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_illibilis1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_illibilis2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_illibilis2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_illibilis2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                
            <div id="curve_chart" style="width:100%; height: 500px"></div>
            <!--Emali market-->
                <h1 class="title">Emali Market</h1>
                <hr>
                <img src="./images/FB_IMG_1663505990336.jpg">
                <p>Emali market is accredited livestock saleyard by county government of Kajiado.
                    It is situated along mombasa-nairobi highway,4kms from emali town.It can hold up two thousand heads of cattles.
                    it attract traders from kajiado ,makueni county Tanzania and other regions.It is usually held every Friday. </p>
                    <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_emali1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_emali1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_emali1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_emali2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_emali2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_emali2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                    <div id="curve_chart2" style="width: 900px; height: 500px"></div>
                    <!--sultan hamud market-->
                    <h1 class="title">Sultan Hamud Market</h1>
                    <hr>
                    <img src="./images/FB_IMG_1663089655445.jpg">
                    <img src="./images/FB_IMG_1663089696248.jpg">
                    <p>Sultan hamud livestock market is accredited salesyard by county government of Kajiado.
                        It is situated at the heart of sultan hamud town near standard gauge railway line.
                        It can hold up to two thousand sheep and goats.
                        It servers mainly residents of kajiado east, south,central and makueni.It is usually held every Thursday.</p>
                        <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_sulatan1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_sulatan1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_sulatan1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_sulatan2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_sulatan2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_sulatan2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                        <div id="curve_chart3" style="width: 900px; height: 500px"></div>
                        <!--Ewuaso Kedong Livestock Market-->
                            <h1 class="title">Ewuaso Kedong Livestock Market</h1>
                            <hr>
                            <img src="./images/FB_IMG_1663505907187.jpg">
                            <img src="./images/image.jpg">
                            <img src="./images/FB_IMG_1663161101546.jpg">
                            <p>This market is located near Ewuaso Kedong shopping center. </p>
                            <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kedong1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kedong1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kedong1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kedong2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kedong2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kedong2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                            <div id="curve_chart4" style="width: 900px; height: 500px"></div>
                    <!--kimana market-->
                    <h1 class="title" >Kimana Market</h1>
                    <hr>
                    <img src="./images/img6.jpg">
                    <img src="./images/img4.jpg">
                    <img src="./images/img5.jpg">
                    <p>traders selling their livestock in Kimana livestock market,kajiado county.Hundreds of Maasai people gather at Kimana town every Tuesday,forming one of the largest Maasai livestock markets in Kenya. Maasai people mainly live in southern Kenya and northern Tanzania. As a nomadic ethnic group in eastern Africa,
                        Maasai people rely on livestock breeding as their main source of livelihood.</p>
                        <div id="tableID_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="tableID_length">        
                 </div>                    
                    <H1 style="text-align:center">CATTLE</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kimana1) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kimana1)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kimana1) <= 0){
                          ?>
                          <tr>                       
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  
                    <H1 style="text-align:center">SHEEP AND GOAT</H1>              
                    <table id="tableID" class="display dataTable no-footer" style="grid-auto-columns: auto;" role="grid" aria-describedby="tableID_info">
                
                      <thead>
                        <tr role="row">
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile  : activate to sort column descending" style="width: 40.7188px; ">Live Weight</th>
                          <th  tabindex="0" aria-controls="tableID" rowspan="1" colspan="1" aria-label="Id No : activate to sort column ascending" style="width: 48.8906px;">Price (ksh)</th>
                        </tr>
                      </thead>
                      <tbody>                                      
                      <?php
                        if(mysqli_num_rows($query_kimana2) > 0){
                        ?>
                        <?php
                          while($data = mysqli_fetch_assoc($query_kimana2)){    
                        ?>
                          <tr class="row">
                        
                              <td> <?php  echo($data['weight']); ?> </td>
                              <td><?php  echo($data['price']); ?></td>
                          </tr>
                          <?php
                          }

                        }
                        else  if(mysqli_num_rows($query_kimana2) <= 0){
                          ?>
                          
                          <tr>
                        
                          <td> 'empty set'</td>
                          <td>'empty set'</td>
                        </tr>
                        <?php

                        }
                        ?>
                      </tbody>
                    </table>

                        <div id="curve_chart5" style="width: 900px; height: 500px"></div>

                        <div>
                        <h1 class="title" style="width: fit-content;">useful links:</h1><a href="https://meteo.go.ke/">Kenya Meteorological Department</a>
                                        <p></p>
                                        <a href="https://www.kalro.org/">Kenya Agricultural and Livestock Research Organization</a>
                        </div>

 
                        <!--meterelogical data-->
                        <article class="download">
                            <!-- Auto width -->
                         <div class="button">
                            <button class="btn"><a href="OND 2022 Seasonal Forecast_Detailed" class="fa fa-download"></a>OND 2022 SEASONAL FORECAST </button>
                            <button class="btn"><a href="Monthly weather Forecast for November 2022" class="fa fa-download"></a>SEPTEMBER 2022 MONTHLY FORECAST</button>
                            <button class="btn"><a href="SEVEN-DAY FORECAST Valid 20th-26th September 2022.pdf" class="fa fa-download"></a>SEVEN-DAY FORECAST</button>
                            </div>
                        </article>
                        <article class="last-container">
                            <h4>Contact Us:</h4>
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <a href="https://web.facebook.com/profile.php?id=100072257630546" class="fa fa-facebook"></a>
                                <p></p>
                                <article class="contact">Email:deyasaitabau@gmail.com<br>
                                    <p></p>
                                Direct-helpline:+254729533373</article>
                                <article class="about">
                                    <h1 style="color:white;">About Kilimonet</h1>
                                    <p style="width:100%;">Kilimonet is a solo proprietorship that is committed to provide timely market prices,meteorological and climatological information and best livestock rearing practices  to all herders and livestock dealers</p>
                                        
                                </article>
                        </article>  
</body>
<script>
		$(document).ready(function() {
			$('#tableID').DataTable({ });
		});
	</script>
</html>